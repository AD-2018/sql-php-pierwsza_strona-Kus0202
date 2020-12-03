<html>
<head>
	<link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dodawanie i Usuwanie</title>
</head>
<body>
	  <a href="https://sql-php-pierwsza_strona-Kus0202">github</a><br>
	  <div class="nav">
      <a href="index.php">Strona Główna</a>
  </div>
<h1>Dodawanie pracownika</h1>
<form action="insert.php" method="POST">

				
			<input type="text" name="imie"><br>
	
			<input type="text" name="dzial"></br>
				
			<input type="text" name="zarobki"></br>
	
			<input type="date" name="data_urodzenia"></br>
				
			<input type="submit" value="Dodaj pracownika">
</form>
<h2>Usuwanie Pracownika</h2>
<form action="delete.php" method="POST">
	<label>Podaj id:</label><input type="number" name="id_pracownicy"</br>
				/* padding: 1rem; */></br>
   <input type="submit" value="usuń pracownika">
</form>
<?php
$servername = "mysql-mateusz.alwaysdata.net"; 
$username = "mateusz"; 
$password = "Strona123"; 
$dbname = "mateusz_kus";    

$conn= new mysqli($servername,$username,$password,$dbname);  
    echo("<h2>Podstawowe</h2>"); 
$sql ="select * from pracownicy"; 
echo("<h3>tabelka</h3>"); 
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
