<?php
    session_start();
    include('dbcon.php');
    ob_start();

    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function generateSecurityCode()
    {
        return mt_rand(100000, 999999); 
    }

    if (isset($_POST['buton_inregistrare']))
    {
        $nume = mysqli_real_escape_string($con,$_POST['nume']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $parola = mysqli_real_escape_string($con,$_POST['parola']);
        $confirmare = mysqli_real_escape_string($con,$_POST['confirmare']);

        $security_code = generateSecurityCode();

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['message'] = "Introdu o adresa de email valida";
            header('Location: register.php');
        }
        else
        {
            $check_email_query = "SELECT email FROM utilizatori WHERE email='$email' ";
            $check_email_query_run = mysqli_query($con, $check_email_query);
            if (mysqli_num_rows($check_email_query_run) > 0)
            {
                $_SESSION['message'] = "Esti deja inregistrat";
                header('Location: login.php');
            }
            else
            {
                if ($parola == $confirmare)
                {
                    $insert_query = "INSERT INTO utilizatori (nume, email, parola, cod) VALUES ('$nume', '$email', '$parola', '$security_code')";
                    $insert_query_run = mysqli_query($con, $insert_query);

                    if ($insert_query_run)
                    {
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
                            $mailer->Subject = 'Cod de securitate pentru inregistrare';
                            $mailer->Body = "Salut, $nume! \n\nCodul tau de securitate este: $security_code";

                            $mailer->send();
                        }
                        catch (Exception $e)
                        {
                            echo 'A intervenit o eroare: ', $mailer->ErrorInfo;
                        }
                        header('location: email_validation.php');
                    }
                    else
                    {
                        $_SESSION['message'] = "Inregistrarea a esuat";
                        header('Location: register.php');
                    }
                }
                else
                {
                    $_SESSION['message'] = "Parolele nu se potrivesc";
                    header('Location: register.php');
                }
            } 
        }
    }

    else if (isset($_POST['buton_login']))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $parola = mysqli_real_escape_string($con, $_POST['parola']);

        $login_query = "SELECT * FROM utilizatori WHERE email = '$email' AND parola = '$parola' ";
        $login_query_run = mysqli_query($con, $login_query);

        if (mysqli_num_rows($login_query_run) > 0)
        {
            $_SESSION['auth'] = true;
            $userdata = mysqli_fetch_array($login_query_run);
            $userid = $userdata['id'];
            $username = $userdata['nume'];
            $useremail = $userdata['email'];
            $role_as = $userdata['role_as'];

            $_SESSION['auth_user'] = [
                'user_id' => $userid,
                'nume' => $username,
                'email' => $useremail
            ];

            $_SESSION['role_as'] = $role_as;

            if ($role_as == 1)
            {
                //$_SESSION['message'] = "Bun venit in dashboard";
                header('Location: adminHome.php');
            }
            else
            {
                $_SESSION['message'] = 'Conectat cu succes';
                header('Location: home.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Date invalide";
            header('Location: login.php');
        }
    }

    ob_end_flush();
?>
