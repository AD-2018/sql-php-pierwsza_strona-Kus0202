<html>
<head>
	<link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Dodawanie i Usuwanie</title>
</head>
<body>
	 <h1>Mateusz Kuś nr.20</h1>
    <nav>
        <ul>
                <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">GitHub</a></li> 
		<li><a href="index.php">Strona Główna</a></li>
                <li><a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
                <li><a href="funkcje_agregujące.php">Funkcję Agregujące</a></li>
                <li><a href="data_czas.php">Data i Czas</a></li>
                <li><a href="formularz.html">Formularz</a></li>
</ul>
</nav>
<h1>Dodawanie Pracownika</h1>
<form action="insert.php" method="POST">

			<label>Imię:</label>	
			<input type="text" name="imie"><br>
	
	                <label>Dział:</label>
			<input type="number" name="dzial"></br>
	
			<label>Zarobki:</label>
			<input type="number" name="zarobki"></br>
	
	                <label>Data Urodzenia:</label>
			<input type="date" name="data_urodzenia"></br>
	                <input type="submit" value="Dodaj Pracownika">
</form>
<h2>Usuwanie Pracownika</h2>
<form action="delete.php" method="POST">
	<label>Podaj ID Pracownika:</label>
	<input type="number" name="id_pracownicy"<br>
   <input type="submit" value="Usuń Pracownika">
</form>
<?php
$servername = "mysql-mateusz.alwaysdata.net"; 
$username = "mateusz"; 
$password = "Strona123"; 
$dbname = "mateusz_kus";    

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

    echo("<h1>Tabela Pracowników:</h1>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th><th>Usuń Pracownika</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>'.
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input name="id" value="'.$row['id_pracownicy'].'" hidden>
   		<input type="submit" class="button_x" value="X">
	     </form>
	     
	     </td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</body>
</html>
