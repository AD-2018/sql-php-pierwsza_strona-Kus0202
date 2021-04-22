<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0: />
    <meta http=equiv="X-UA-Compatible" content="ie=edge" />
                                                        <title>Mateusz Kuś</title>
   <link rel="stylesheet" href="grid.css">
   </head>  
   <body>
    
                                         <div class="container">
     <header>
      <div class="tabela1">
   <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM nauczyciele";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>id</th><th>Nauczyciel</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['Nauczyciel'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
                          
    
         ?>
                           <h1>PODAJ ID TO USUNĘ OSOBĘ Z TABELI</h1>
                <form action="../delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="Usuń">
                </form>
        </div>
      </header>
      <nav>
      2
      </nav>
      <main>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT szkola.id, Nauczyciel, nazwisko FROM nauczyciele, szkola, Uczen where nauczyciele.id=szkola.nauczyciele_id and Uczen.id=szkola.uczen_id";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>id</th><th>Nauczyciel</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['Nauczyciel'].'</td><td>'.$row['nazwisko'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
                  
                 ?>
                  <h1>PODAJ ID TO USUNĘ OSOBĘ Z TABELI</h1>
                <form action="../delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="Usuń">
                </form>
      </main>
      <footer>
      4
      </footer>
      <aside>
      <div class="tabela1">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM Uczen";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>nazwisko</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['nazwisko'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
               ?>
                           <h1>PODAJ ID TO USUNĘ OSOBĘ Z TABELI</h1>
                <form action="../delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="Usuń">
                </form>
        </div>
      </aside>
    </div>
  </body>
</html>
