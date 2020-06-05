<?php
/* Memulai session */
session_start();

/* Mendefinisikan angka random untuk soal */
$_SESSION['a'] = rand(0, 20);
$_SESSION['b'] = rand(0, 20);
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
    <label><h3> Halo <?php echo $_SESSION["nama"];?>, tetap semangat ya... you can do the best!! <br>
    [Lives : <?php echo $_SESSION['lives'];?> | Score : <?php echo $_SESSION['score'];?>]<h3><label><br>
    <label><h3> Berapakah <?php echo $_SESSION['a'] ?> + <?php echo $_SESSION['b'] ?> = ... <h3><label>
    <input type="text" name="jawab" placeholder="Masukkan jawaban" required>
    <button type="submit">Submit</button>   
</div>

</form>  
</body>
</html>