<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "Lumea_prin_obiectiv";

    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con)
    {
        die("Conexiunea a esuat: ". mysqli_connect_error());
    }
?>