<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mateusz Kuś</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mateusz Kuś nr.20</h1>
    <nav>
        <ul>
             <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">GitHub</a></li> 
                <li><a href="pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
                <li><a href="pracownicy/funkcje_agregujące.php">Funkcję Agregujące</a></li>
                <li><a href="pracownicy/data_czas.php">Data i Czas</a></li>
                <li><a href="inne/formularz.html">Formularz</a></li>
                <li><a href="pracownicy/DaneDoBazy.php">Dane Do Bazy</a></li>
            <li><a href="biblioteka/biblioteka.php">Biblioteka</a></li>
            <li><a href="cssgrid/index.php">Grid</a></li>
          
                
                
</ul>
</nav>

  
<?php
   

require_once("connect.php");
$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<br>";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    echo("<h1>Tabela Pracowników</h1>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");
?>
</body>
</html>

   
