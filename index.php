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
    <a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje_agregujące.php">Funkcje agregujące</a>
    <a href="data_czas.php">Data i Czas</a>
    <a href="formularz.html">Formularz</a>
    <a href="DaneDoBazy.html">Dane Do Bazy</a>
    <a href="delete.php">Delete</a>
    <?php
    $conn = new mysqli ($servername, $username, $password, $dbname);
    echo("<h3> Tabela Pracownicy Organizacja </h3>");
$sql = "SELECT * FROM pracownicy,organizacja";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    </body>
        </html>
        ?>
