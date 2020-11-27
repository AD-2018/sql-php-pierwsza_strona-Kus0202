<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="name">Mateusz Kuś nr 20</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kus0202">github</a>
    <br>
    <nav class="nav">
        <a href="index.php">Strona Główna</a>
        <a href="funkcję_agregujące.php">Funkcje agregujące</a>
        <a href="pracownicy_organizacja.php">Organizacja i Pracownicy</a>
        <a href="data_czas.php">Data i czas</a>
        <a href="formularz.html">Formularz</a>
    </nav><br>
    <h2>Dodawanie Pracownika</h2>
    <form action="insert.php" method="POST">
	    <input type="text" name="imie"><br>
		<input type="number" name="dzial"></br>
		<input type="number" name="zarobki"></br>
		<input type="date" name="data_urodzenia"></br>
		<input type="submit" value="Dodaj Pracownika">
    </form>
    <h3>Usuwanie Pracownika Po ID</h3>
    <form action="delete.php" method="POST">
        <input type="number" name="id"></br>
        <input type="submit" value="Usuń Pracownika">
     </form>					    
</body>
</html>
						    

