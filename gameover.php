<?php
/* Memulai session */
session_start();

/* Mengoneksikan database */
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Game</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form action="index.php" method="post">  
<div class="container">
    <label><h2>Math Game<h2><label>
    <label><h3> Hello <?php echo $_SESSION["nama"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.<br>
    [Score Anda : <?php echo $_SESSION['score'];?>]<h3><label>
    <button type="submit">Main Lagi</button> 
</div>
</form>

<?php
/* Menambah data pemain*/
$query=mysqli_query($koneksi, "insert into datapemain set nama='".$_SESSION['nama']."', email='".$_SESSION['email']."', score='".$_SESSION['score']."'");
?>

<br>
<br>
<br>
<h2>Hall Of Fame<h2>
<table width = 500px align = center border = 3 cellpadding = 7>
<tr class="head" >
    <th width = 90 px><h4>No<h4></th>
    <th width = 300 px><h4>Nama<h4></th>
    <th width = 170 px><h4>Score<h4></th>
</tr>

<?php 
/* Menampilkan 10 nama dan score tertinggi*/
$result=mysqli_query($koneksi, "SELECT * FROM datapemain ORDER BY score DESC");
$no=1;
foreach($result as $row){
        echo "<tr class ='isi'>
        <td><h1>  $no <h1></td>
        <td><h1>".$row['nama']. "<h1></td>
        <td><h1>".$row['score']."<h1></td>
        </tr>";
        $no++;
        if ($no>10) {
        break;
        }
    }
?>

</table>
<br>
</body>
</html>