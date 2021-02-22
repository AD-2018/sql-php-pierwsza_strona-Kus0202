<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Mateusz Kuś</title>
</head>
<body>
    <h1>Mateusz Kuś nr.20</h1>
    <nav>
        <ul>
             <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">GitHub</a></li> 
		<li><a href="../index.php">Strona Główna</a></li>
		<li><a href="../pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
                <li><a href="../pracownicy/funkcje_agregujące.php">Funkcję Agregujące</a></li>
                <li><a href="../pracownicy/data_czas.php">Data i Czas</a></li>
                <li><a href="../inne/formularz.html">Formularz</a></li>
                <li><a href="../pracownicy/DaneDoBazy.php">Dane Do Bazy</a></li>
                
                
<?php
require_once ("../connect.php");

$sql = "SELECT autor FROM biblioteka";
echo ("<h3>Autorzy</h3>");
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok</br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<label for="bibl_autor">Wybierz Autora: </label>');	
echo('<select name="Autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_autor'].'">');
        echo($row['autor']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT tytul FROM biblioteka";
echo("<h3>Książki</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok</br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<label for="bibl_tytul">Wybierz Tytuł: </label>');	
echo('<select name="tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_tytul'].'">');
        echo($row['tytul']);
        echo("</option>"); 
    }
echo('</select>');

echo ('</table>');
	
$sql = "SELECT autor, tytul FROM biblioteka";
echo("<h3>AUTORZY I KSIĄŻKI</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabela">');
echo ("<tr><th>autor</th><th>tytul</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['autor']."</td><td>".$row['tytul']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
	</div>
	</div>
</body>
</html>
