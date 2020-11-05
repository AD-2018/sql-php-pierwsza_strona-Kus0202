 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
 
 <h1>Zadanie 1 Mateusz Kuś</h1>
 
<?php
$servername = "sql2.freemysqlhosting.net"
 $username = "sql2374586"
 $password = "zB1!qI2!"
 $dbname = "sql2374586"
 
$conn = new mysqli("$servername","$username","$password","$dbname");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 
 
 $sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


    echo('<table border="1">');
    echo('<th>Imie1</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


?>
</body>
</html>
