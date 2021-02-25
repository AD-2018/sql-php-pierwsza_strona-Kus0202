<?php
echo("bibl_autor.php");
echo "<li>".$_POST['autor'];

require_once("connect.php");

$sql = "INSERT INTO bibl_autor (id_autora, autor) 
       VALUES (null, '".$_POST['autor']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://kusmateusz.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
