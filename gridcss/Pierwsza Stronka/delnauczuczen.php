<?php
echo("Jesteś w delnauczuczen.php <br>");
echo $_POST['id'];

require_once("../../connect.php");



$sql = "SELECT szkola.id, Nauczyciel, nazwisko FROM nauczyciele, szkola, Uczen where nauczyciele.id=szkola.nauczyciele_id and Uczen.id=szkola.uczen_id";

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kusmateusz.herokuapp.com/gridcss/Pierwsza%20Stronka/grid.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
