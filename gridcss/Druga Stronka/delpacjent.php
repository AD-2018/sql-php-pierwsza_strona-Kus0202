<?php
echo("Jesteś w delpacjent.php <br>");
echo $_POST['id'];

require_once("../../connect.php");



$sql = "DELETE FROM pacjenci WHERE id=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kusmateusz.herokuapp.com/gridcss/Druga%20Stronka/grid.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
