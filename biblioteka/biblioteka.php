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
		<li><a href="../pracownicy/index.php">Strona Główna</a></li>
		<li><a href="../pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
                <li><a href="../pracownicy/funkcje_agregujące.php">Funkcję Agregujące</a></li>
                <li><a href="../pracownicy/data_czas.php">Data i Czas</a></li>
                <li><a href="../inne/formularz.html">Formularz</a></li>
                <li><a href="../pracownicy/DaneDoBazy.php">Dane Do Bazy</a></li>
                
                
</ul>
</nav>
<?php 
	require_once("connect.php");
$sql = "select (bibl_tytul_bibl_utor.id) as ID_TAB, autor, tytul, bibl_wypo from bibl_tytul_bibl_autor,bibl_autor,bibl_tytul where bibl_autor.id=bibl_autor_id and bibl_tytul.id=bibl_tytul_id order by autor,ID_TAB asc";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="ksiazka">');
    while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['id'].'">';
        echo($row['autor'].', '.$row['tytul']);
         echo "</option>";
    };
echo('</select>');
echo ('<br>');
	
	
require_once("connect.php");
  echo("<h3>Tytuły</h3>"); 
$sql = "select * from bibl_tytul";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>tytul</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id"].'</td><td>'.$row["tytul"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>');
	
		  echo("<h3>Autorzy</h3>"); 
$sql = "select * from bibl_autor";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>autor</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id"].'</td><td>'.$row["autor"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?> 
