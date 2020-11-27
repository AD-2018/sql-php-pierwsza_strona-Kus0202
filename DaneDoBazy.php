<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="name">Mateusz Kuś nr.20</h1>
    <a href="https://"sql-php-pierwsza_strona-Kus0202" class="github-link">github</a>
    <br>
    <nav class="nav">
        <a href="index.php">Strona Główna</a>
        <a href="funkcję_agregujące.php">Funkcje agregujące</a>
        <a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
        <a href="data_czas.php">Data i Czas</a>
        <a href="formularz.html">Formularz</a>
        
    </nav><br>
    <h2>Dodawanie Pracownika</h2>
    <form action="insert.php" method="POST">
	    <input type="text" name="imie"><br>
		<input type="number" name="dzial"></br>
		<input type="number" name="zarobki"></br>
		<input type="date" name="data_urodzenia"></br>
		<input type="submit" value="Dodaj Pracownika">
    </form>
    <h3>Usuwanie Pracownika</h3>
    <form action="delete.php" method="POST">
        <input type="number" name="id"></br>
        <input type="submit" value="Usuń Pracownika">
     </form>
</body>
</html>
<?php
require_once("connect.php");

$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

$result = mysqli_query($conn, $sql);

echo("<table border='1'>");
echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
        echo("</tr>");
    };
echo("</table>");
?>