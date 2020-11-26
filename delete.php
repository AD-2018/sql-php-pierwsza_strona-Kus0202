<?php
echo("Jesteś w delete.php <br>");
echo $_POST['id'];


$servername = "mysql-mateusz.alwaysdata.net";
$username = "mateusz";
$password = "Strona123";
$dbname = "mateusz_kus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE FROM pracownicy WHERE id=".$_POST['id'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

