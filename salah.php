<?php
/* Memulai session */
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Game</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form action="" method="post">  
<div class="container">
<label><h2>Math Game<h2><label>
    <label><h3> Hello <?php echo $_SESSION["nama"];?>, Sayang jawaban Anda salah... tetap semangat ya!!!<br>
    [Lives : <?php echo $_SESSION['lives'];?> | Score : <?php echo $_SESSION['score'];?>]<h3><label>
    <br>
    <a class ='a2' href="soallanjut.php">Soal Selanjutnya</a>   
</div>
</form>  
</body>
</html>