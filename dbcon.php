<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "Lumea prin obiectiv";

    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con)
    {
        die("Conexiunea a esuat: ". mysqli_connect_error());
    }
    else
    {
        echo "Conectat cu succes";
    }
?>