<?php

    $serverName = "localhost";
    $userName = "root";
    $password = ""; // Write your SQL Password Here
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
