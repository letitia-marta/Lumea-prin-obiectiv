<?php
    if (isset($_SESSION['auth']))
    {
        if ($_SESSION['role_as'] != 1)
        {
            $_SESSION['message'] = "Nu ai permisiunea de a acesa aceasta pagina";
            header('Location: home.php');
        }
    }
    else
    {
        $_SESSION['message'] = "Conecteaza-te cu un cont de administrator";
        header('Location: login.php');
    }
?>