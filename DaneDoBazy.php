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

$conn= new mysqli($servername,$username,$password,$dbname);  
     
$sql ="select * from pracownicy"; 
echo("<h3>Tabela Pracowników</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
