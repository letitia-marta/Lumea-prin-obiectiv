<?php
    session_start();
    include('dbcon.php');
    ob_start();

    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['newsletter-btn']))
    {
        $email = mysqli_real_escape_string($con,$_POST['email']);

        $chk_existing = "SELECT * FROM newsletter WHERE email = '$email'";
        $chk_existing_run = mysqli_query($con, $chk_existing);

        if (mysqli_num_rows($chk_existing_run) > 0)
        {
            $_SESSION['message'] = "Esti abonat deja la newsletter";
            header('Location: home.php');
            exit();
        }
        else
        {
            $insert_query = "INSERT INTO newsletter (email) VALUES ('$email')";
            $insert_query_run = mysqli_query($con, $insert_query);

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
                $mailer->Subject = 'Newsletter';
                $mailer->Body = "Salut! \n\nTe-ai abonat la newsletter. Vei primi de la noi noutăți și oferte.";

                $mailer->send();
            }
            catch (Exception $e)
            {
                echo 'A intervenit o eroare: ', $mailer->ErrorInfo;
            }

            $_SESSION['message'] = "Te-ai abonat la newsletter";
            header('Location: home.php');
        }
    }

    ob_end_flush();
?>
