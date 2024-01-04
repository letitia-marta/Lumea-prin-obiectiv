<?php
    include('dbcon.php');
    ob_start();

    if (isset($_POST['feedback-btn']))
    {
        $nume = mysqli_real_escape_string($con,$_POST['nume']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $subiect = mysqli_real_escape_string($con,$_POST['subiect']);
        $mesaj = mysqli_real_escape_string($con,$_POST['mesaj']);

        $chk_existing = "SELECT * FROM feedback WHERE email = '$email'";
        $chk_existing_run = mysqli_query($con, $chk_existing);

        if (mysqli_num_rows($chk_existing_run) > 0)
        {
            $_SESSION['message'] = "Ai transmis deja parerea ta";
            header('Location: home.php');
            exit();
        }
        else
        {
            $insert_query = "INSERT INTO feedback (nume,email,subiect,mesaj) VALUES ('$nume','$email','$subiect','$mesaj')";
            $insert_query_run = mysqli_query($con, $insert_query);
            $_SESSION['message'] = "Feedback-ul a fost transmis";
            header('Location: home.php');
        }
    }

    ob_end_flush();
?>
