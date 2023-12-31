<?php
    session_start();
    include('dbcon.php');
    require 'myFunctions.php';

    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_SESSION['auth']))
    {
        if (isset($_POST['order-btn']))
        {
            $nume = mysqli_real_escape_string($con, $_POST['nume']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $telefon = mysqli_real_escape_string($con, $_POST['telefon']);
            $cod_postal = mysqli_real_escape_string($con, $_POST['cod_postal']);
            $adresa = mysqli_real_escape_string($con, $_POST['adresa']);

            if ($nume == "" || $email == "" || $telefon == "" || $cod_postal == "" || $adresa == "")
            {
                $_SESSION['message'] = "Toate campurile sunt obligatorii";
                header('Location: checkout.php');
                exit(0);
            }

            $nr_expeditie = "LPR".rand(1111,9999);
            $user_id = $_SESSION['auth_user']['user_id'];

            $query = "SELECT c.id AS cid, c.prod_id, c.prod_qty, p.price
                    FROM cos AS c JOIN products AS p ON c.prod_id = p.id
                    WHERE c.user_id = '$user_id' ORDER BY c.id DESC";
            $query_run = mysqli_query($con, $query);

            $total = 0;
            foreach ($query_run as $item)
            {
                $total = $total + $item['price'] * $item['prod_qty'];
            }
            $total += 5;
            
            $metoda_plata = mysqli_real_escape_string($con, $_POST['metoda_plata']);
            //$id_plata = mysqli_real_escape_string($con, $_POST['id_plata']);
            $id_plata = "";

            $insert_query = "INSERT INTO comenzi 
            (nr_expeditie, user_id, nume, email, telefon, adresa, cod_postal, total, metoda_plata, id_plata)
            VALUES ('$nr_expeditie','$user_id','$nume','$email','$telefon','$adresa','$cod_postal','$total','$metoda_plata','$id_plata')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run)
            {
                foreach ($query_run as $item)
                {
                    $id_produs = $item['prod_id'];
                    $cantitate = $item['prod_qty'];
                    $pret = $item['price'];
                    $id_comanda = mysqli_insert_id($con);

                    $insert_items_query = "INSERT INTO comanda (id_comanda, id_produs, cantitate, pret)
                    VALUES ('$id_comanda','$id_produs','$cantitate','$pret')";
                    $insert_items_query_run = mysqli_query($con, $insert_items_query);
                }

                $mailer = new PHPMailer(true);

                try
                {
                    $mailer->isSMTP();
                    $mailer->Host = 'smtp.gmail.com';
                    $mailer->SMTPAuth = true;
                    $mailer->Username = 'formularcontact1@gmail.com';
                    $mailer->Password = 'aayg mocl ifyq bnsv';
                    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mailer->Port = 587;

                    $mailer->setFrom('formularcontact1@gmail.com', 'Lumea prin obiectiv');
                    $mailer->addAddress($email, $nume);

                    $mailer->isHTML(true);
                    $mailer->Subject = "Detalii comanda $nr_expeditie";
                    $mailer->Body = "Salut, $nume! \n\n   Comanda $nr_expeditie a fost plasata si va fi expediata in cel mai scurt timp!
                                    \n\nTotal de plata: $total RON\n(plata se face prin ramburs la livrare)";

                    $mailer->send();
                }
                catch (Exception $e)
                {
                    echo 'A intervenit o eroare: ', $mailer->ErrorInfo;
                }

                $_SESSION['message'] = "Comanda a fost plasata";
                header('Location: final.php');
                die();
            }
        }
    }
    else
    {
        $_SESSION['message'] = "Conecteaza-te pentru a continua";
        header('Location: home.php');
    }
?>
