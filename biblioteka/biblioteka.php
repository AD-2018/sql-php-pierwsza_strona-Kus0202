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
</div>
<div class="flexbox-containter">
    <div>
        <h3>DODAJ TYTUL</h3>
        <form action="/Biblioteka/new_tytul.php" method="POST">
    	<p>TYTUL:</p>
        <input type="text" name="tytul"></br>
        <input type="submit" value="dodaj tytul">
        </form>
    </div>
    <div>
        <h3>DODAJ AUTORA</h3>
        <form action="/Biblioteka/new_autor.php" method="POST">
    	<p>AUTOR:</p>
        <input type="text" name="autor"></br>
        <input type="submit" value="dodaj autora">
        </form>
    </div>
</div>

<?php   
$servername = "mysql-mateusz.alwaysdata.net";
    $username = "mateusz";
    $password = "Strona123";
    $dbname = "mateusz_kus";

$conn = new mysqli ($servername, $username, $password, $dbname);
	echo("<div class='listy-Biblioteka'>");
	echo('<h2>Listy:<h2>');
	echo('<h2>lista NR 1<h2>');
	$sql ="SELECT autor,tytul from bibl_autor,bibl_tytul, bibl_book where bibl_autor.id_autor=bibl_book.id_autor and bibl_tytul.id_tytul=bibl_book.id_tytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="bibl_autor">');
	while($row = mysqli_fetch_assoc($result)) {
          echo '<option value="'.$row['id'].'">';
	    echo($row['autor'].', '.$row['tytul']);
 	    echo "</option>";
	};
	echo('</select>');
    echo("</div>");

    echo("<div class='tabelki'>");
        echo("<div class='wnetrze'>");
$sql = "SELECT * FROM bibl_autor";
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Autor</th><th>USUN</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_autor"].'</td><td>'.$row["autor"].'</td>'.
		
	'<td>
	
	 	 <form action="del_autor.php" method="POST">
          		<input type="text" name="id_autor" value="'.$row["id_autor"].'" hidden>
          		<input type="submit" value="Usun">
    	  	</form>
	</td>');
	        echo ('</tr>');
  	}echo ('</table>');
      echo("</div>");
      echo("<div class='wnetrze'>");
        $sql = "SELECT * FROM bibl_tytul";
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>tytul</th><th>USUN</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_tytul"].'</td><td>'.$row["tytul"].'</td>'.
		
	'<td>
	
	 	 <form action="del_book.php" method="POST">
          		<input type="text" name="id_tytul" value="'.$row["id_tytul"].'" hidden>
          		<input type="submit" value="Usun">
    	  	</form>
	</td>');
	        echo ('</tr>');
  	}echo ('</table>');
      echo("</div>");
      echo("<div class='wnetrze'>");
echo("<h3> CALOSC </h3>");
$sql = "SELECT * FROM bibl_autor,bibl_tytul, bibl_book where bibl_autor.id_autor=bibl_book.id_autor and bibl_tytul.id_tytul=bibl_book.id_tytul";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Autor</th><th>Ksiazka</th><th>wyporzyczenia</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["ID_TAB"].'</td><td>'.$row["autor"].'</td><td>'.$row["tytul"].'</td><td>'.$row["wypoz"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
        echo("</div>");
echo("</div>");
?>
</body>
</html>
