<?php
echo("jestes w new_tytul.php <br>");
echo "<li>". $_POST['tytul'];

$servername = "mysql-mateusz.alwaysdata.net";
    $username = "mateusz";
    $password = "Strona123";
    $dbname = "mateusz_kus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_tytul (id_tytul,tytul) 
       VALUES (null, '".$_POST['tytul']."')";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
   header ('Location:https://kusmateusz.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
