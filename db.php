<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "Nikita@9078";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
