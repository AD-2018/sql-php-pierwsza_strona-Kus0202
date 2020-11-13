<?php
    $servername = "remotemysql.com";
    $username = " nNFn1rLs5g";
    $password = "YbkC0YF0Mm";
    $dbname = "nNFn1rLs5g";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
