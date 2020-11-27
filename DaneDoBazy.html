<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>Dane</title>
</head>
<body>
<nav>
    <br>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a>
    <br>
    <br>
    <div class="nav">
         <a href="index.php">Strona Główna</a>  
         <a href="pracownicy.php">Pracownicy</a>
         <a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>   
         <a href="funkcje_agregujace.php">Funkcje Agregujace</a>  
         <a href="data_czas.php">Data i Czas</a>
         <a href="nieobecnosci.php">Nieobecności Pracowników</a>
         <a href="strona.php">Strona</a>
         <a href="daneDoBazy.php">Dane Do Bazy</a>
    </div>
    <br>
</nav>
	</br>
	<h3>Dodawanie Pracownika</h3>
<form action="insert.php" method="POST">
	<b>Imie:</b><c><input type="text" name="imie"></c><br>
	<b>Dział:</b><c><input type="number" name="dzial"></c></br>
	<b>Zarobki:</b><c><input type="number" name="zarobki"></c></br>
	<b>Data Urodzenia:</b><c><input type="date" name="data_urodzenia"></c></br>
	<input type="submit" value="Dodaj Pracownika">
</form>
<h3>Usuwanie Pracownika po ID</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usuń Pracownika">
 </form>
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

    echo("<h1>Tabelka</h1>");

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


