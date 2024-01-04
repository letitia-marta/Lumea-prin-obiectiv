<?php
    session_start();
    include('dbcon.php');
    ob_start();

    if (isset($_POST['buton_inregistrare']))
    {
        $nume = mysqli_real_escape_string($con,$_POST['nume']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $parola = mysqli_real_escape_string($con,$_POST['parola']);
        $confirmare = mysqli_real_escape_string($con,$_POST['confirmare']);

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
                    $insert_query = "INSERT INTO utilizatori (nume, email, parola) VALUES ('$nume', '$email', '$parola')";
                    $insert_query_run = mysqli_query($con, $insert_query);

                    if ($insert_query_run)
                    {
                        /*$to = $email;
                        $subject = 'Verificare adresa e-mail';
                        $message = "Iti multumim ca te-ai inregistrat!\n\n"
                            . "Contul tau a fost creat, te vei putea conecta dupa ce validezi adresa ta de e-mail.\n\n"
                            . "------------------------\n"
                            . "Utilizator: $nume\n"
                            . "------------------------\n\n"
                            . "Acceseaza link-ul de mai jos pentru a valida adresa de e-mail:\n"
                            . "http://www.lumeaprinobiectiv.com/verify.php?email=$email";

                        $headers = 'From: letitia.iliescu@gmail.com' . "\r\n";
                        if (mail($to, $subject, $message, $headers))
                        {
                            $_SESSION['message'] = "A fost trimis mail-ul de validare";
                            header('Location: register.php');
                        }
                        else
                        {
                            $_SESSION['message'] = "A intervenit o eroare. Detalii: " . error_get_last()['message'];
                            header('Location: register.php');
                        }*/
                        $_SESSION['message'] = "Te-ai inregistrat cu succes";
                        header('Location: login.php');
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
