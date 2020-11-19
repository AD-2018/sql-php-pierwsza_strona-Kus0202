<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mateusz Kuś nr.20</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">github</a>
    <br>
    <a href="index.php">Strona Główna</a>
    <a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a href="data_czas.php">Data i Czas</a>
    </body>
</html>
<?php
    require_once("connect.php");

    $sql = "SELECT SUM(zarobki) as suma FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
          echo("<h3> Funkcje Agregujące </h3>");
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['suma']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

?>
