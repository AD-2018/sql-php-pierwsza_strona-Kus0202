<?php
echo("Jesteś w delete.php <br>");
echo $_POST['id'];

require_once("../../connect.php");



$sql = "DELETE FROM Nauczyciele WHERE id_naucz=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kusmateusz.herokuapp.com/gridcss/Pierwsza Stronka/grid.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
