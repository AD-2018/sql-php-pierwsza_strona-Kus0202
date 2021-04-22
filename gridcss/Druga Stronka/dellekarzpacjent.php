<?php
echo("Jesteś w dellekarzpacjent.php <br>");
echo $_POST['id'];

require_once("../../connect.php");


$sql = "SELECT szpital.id, lekarz, pacjent FROM lekarze, szpital, pacjenci where lekarze.id=szpital.lekarz_id and pacjenci.id=szpital.pacjent_id";


echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kusmateusz.herokuapp.com/gridcss/Druga%20Stronka/grid.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
