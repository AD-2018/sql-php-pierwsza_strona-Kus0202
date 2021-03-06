<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Mateusz Kuś</title>
</head>
<body>
    <h1>Mateusz Kuś nr.20</h1>
    <nav>
        <ul>
             <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">GitHub</a></li> 
		<li><a href="../index.php">Strona Główna</a></li>
                <li><a href="../pracownicy/funkcje_agregujące.php">Funkcję Agregujące</a></li>
                <li><a href="../pracownicy/data_czas.php">Data i Czas</a></li>
                <li><a href="../inne/formularz.html">Formularz</a></li>
                <li><a href="../pracownicy/DaneDoBazy.php">Dane Do Bazy</a></li>
		<li><a href="../biblioteka/biblioteka.php">Biblioteka</a></li>
                
                
</ul>
</nav>
<?php 
require_once("connect.php");

$data=date("Y-m-d");
$czas=date("H:i");

echo "Stronę wyświetlono dnia $data o godzinie $czas";

	echo ('<h2>Pracownicy i Organizacja</h2>');
    echo ('<h3>Lista Pracowników<h3>');
	$sql ="select * from pracownicy";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="pracownik">');
	while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['id_pracownicy'].'">';
	    echo($row['imie'].', '.$row['zarobki'].', '.$row['data_urodzenia'].', '.$row['dzial']);
 	    echo "</option>";
	};
echo('</select>');
echo ('<br>');
$sql = "select * from pracownicy, organizacja where id_org=dzial"; 
echo("<h4>Pracownicy z nazwą działu</h4>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
 $sql = "select * from pracownicy, organizacja where id_org=dzial and (dzial=1 or dzial=4)";
echo("<h3>Pracownicy tylko z działu 1 i 4</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql = "select * from pracownicy, organizacja where id_org=dzial and imie like '%a'";   
echo("<h3>Lista kobiet z nazwami działów</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql = "select * from pracownicy, organizacja where id_org=dzial and imie not like '%a'";   
echo("<h3>Lista mężczyzn z nazwami działów</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    echo("<h2>sortowanie</h2>"); 
    
$sql = "select * from pracownicy, organizacja where id_org=dzial order by imie desc";    
echo("<h3>Pracownicy posortowani malejąco wg imienia </h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql = "select * from pracownicy, organizacja where id_org=dzial and dzial=3 order by imie asc";
echo("<h3>- Pracownicy z działu 3 posortowani rosnąco po imieniu</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql = "select * from pracownicy, organizacja where id_org=dzial and imie like '%a' order by imie asc"; 
echo("<h3>Kobiety posortowane rosnąco po imieniu</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql = "select * from pracownicy, organizacja where id_org=dzial and imie like '%a' and (dzial=1 or dzial=3) order by zarobki asc";
echo("<h3>Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
 $sql = "select * from pracownicy, organizacja where id_org=dzial and imie not like '%a' order by nazwa_dzial asc, zarobki asc";
echo("<h3>Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
     echo("<h2>limit</h2>"); 
    
  $sql = "select * from pracownicy, organizacja where id_org=dzial and dzial=4 order by zarobki desc limit 2";   
 echo("<h3>Dwóch najlepiej zarabiających pracowników z działu 4</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
                    
                    
$sql = "select * from pracownicy, organizacja where id_org=dzial and (imie like '%a') and (dzial=4 or dzial=2) order by zarobki desc limit 3";   
 echo("<h3>Trzy najlepiej zarabiające kobiety z działu 4 i 2</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
                    
$sql = "select * from pracownicy, organizacja where id_org=dzial order by data_urodzenia asc limit 1";   
echo("<h3>Najstarszy pracownik</h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Imie</th><th>zarobki</th><th>dzial</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
  </html>
