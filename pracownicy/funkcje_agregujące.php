<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mateusz Kuś nr.20</h1>
    <nav>
        <ul>
                <li><a href="pracownicy/https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">GitHub</a></li> 
                <li><a href="pracownicy/index.php">Strona Główna</a></li>
                <li><a href="pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
                <li><a href="pracownicy/data_czas.php">Data i Czas</a></li>
                <li><a href="inne/formularz.html">Formularz</a></li>
                <li><a href="pracownicy/DaneDoBazy.php">Dane Do Bazy</a></li>
</ul>
</nav>


<?php 
require_once("connect.php");
    
$sql ="select sum(zarobki) from pracownicy"; 
    echo("<h1>Funkcję Agregujące</h1>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql ="select sum(zarobki) from pracownicy where imie like '%a'"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select sum(zarobki) from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where imie not like '%a'"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where (dzial=4)"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select count(imie) from pracownicy"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select count(imie) from pracownicy where imie like '%a' and (dzial=1 or dzial=3)"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
       echo("<h1>Group By</h1>"); 
    
$sql ="select nazwa_dzial, sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, count(imie) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, avg(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['avg(zarobki)']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select sum(zarobki), if((imie like '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th><th>plec</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td><td>".$row['plec']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select avg(zarobki), if((imie like '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec"; 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th><th>plec</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td><td>".$row['plec']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
           echo("<h1>Having</h1>"); 
            
    $sql ="select nazwa_dzial,sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having sum(zarobki)<28"; 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
                    
    $sql ="select nazwa_dzial,avg(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having avg(zarobki)>30"; 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
     
    $sql ="select count(imie),nazwa_dzial from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having count(imie)>3"; 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
</html>
