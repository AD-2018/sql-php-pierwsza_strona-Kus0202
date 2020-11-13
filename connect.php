<?php
    $servername = "mysql-mateusz.alwaysdata.net";
    $username = "mateusz";
    $password = "Strona123";
    $dbname = "mateusz_kus";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
