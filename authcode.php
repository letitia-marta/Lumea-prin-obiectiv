<?php

    session_start();
    include('dbcon.php');

    if(isset($_POST['buton_inregistrare']))
    {
        $nume = mysqli_real_escape_string($con,$_POST['nume']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $parola = mysqli_real_escape_string($con,$_POST['parola']);
        $confirmare = mysqli_real_escape_string($con,$_POST['confirmare']);

        if($parola == $confirmare)
        {
            $insert_query = "INSERT INTO utilizatori (Nume,E-mail,Parola) VALUES ('$nume','$email','$parola')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run)
            {
                $_SESSION['message'] = "Inregistrat cu succes";
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

?>