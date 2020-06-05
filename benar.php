<?php
/* Memulai session */
session_start();

/* Penentuan apakah jawaban pemain benar atau salah */
$jawaban= strval($_SESSION['a'] + $_SESSION['b']);
if ($_POST['jawab'] != $jawaban) {
    $_SESSION['lives'] = $_SESSION['lives'] - 1;
    $_SESSION['score'] = $_SESSION['score'] - 2;
    header("Location:salah.php");
}else {
    $_SESSION['score'] = $_SESSION['score'] + 10;
}
if ($_SESSION['lives'] == 0) {
    header("Location:gameover.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Game</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form action="benar.php" method="post">  
<div class="container">
<label><h2>Math Game<h2><label>
    <label><h3> Hello <?php echo $_SESSION["nama"];?>, Selamat jawaban Anda benar... <br>
    [Lives : <?php echo $_SESSION['lives'];?> | Score : <?php echo $_SESSION['score'];?>]<h3><label>
    <br>
    <a class='a2' href="soallanjut.php">Soal Selanjutnya</a>   
    <br>
</div>
</form>  
</body>
</html>