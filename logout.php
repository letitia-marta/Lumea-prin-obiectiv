<?php
    session_start();
    if (isset($_SESSION['auth']))
    {
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        $_SESSION['message'] = "V-ati deconectat cu succes";
    }

    header('Location: home.php');
?>