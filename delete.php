<?php
echo $_POST['id_pracownicy'];

require "connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id_pracownicy'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  header ('Location:https://kusmateusz.herokuapp.com/DaneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
