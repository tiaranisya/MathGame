<?php
/* Memulai session */
session_start();

/* Mengoneksikan database */
include "koneksi.php";

/* Cek apakah ada pemain yang sudah pernah entri */
if (isset ($_SESSION['nama'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Game</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form action="soalawal.php" method="post">  
<div class="container">
<label><h2>Math Game<h2><label>
    <label><h3> Halo <?php echo $_SESSION['nama'];?>, Selamat datang kembali di permainan ini !!!<h3><label>
    <button type="submit">Start Game</button>   
    <br>
    <br>
    <label><h3>Bukan Anda?<h3><label>
    <a href="login.php">Klik Disini</a>     
</div>
</form>  
</body>
</html>

<?php
/*Jika belum pernah entri, langsung menuju login.php*/
} else {
    header("Location:login.php");
}
?>