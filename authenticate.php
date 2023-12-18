<?php
    if (isset($_SESSION['auth']))
    {
        $_SESSION['message'] = "Conecteaza-te pentru a accesa cosul de cumparaturi";
        header('Location: login.php');
    }
?>