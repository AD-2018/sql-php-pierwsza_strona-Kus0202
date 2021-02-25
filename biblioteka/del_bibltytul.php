<?php
echo("Delete");
echo $_POST['id_tytul'];

$servername = "mysql-mateusz.alwaysdata.net";
    $username = "mateusz";
    $password = "Strona123";
    $dbname = "mateusz_kus";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM bibl_tytul WHERE id_tytul=".$_POST['id_tytul'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kusmateusz.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
