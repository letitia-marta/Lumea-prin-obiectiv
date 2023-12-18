<?php
    session_start();
    include('dbcon.php');
    ob_start();

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
            $_SESSION['message'] = "Te-ai abonat la newsletter";
            header('Location: home.php');
        }
    }

    ob_end_flush();
?>