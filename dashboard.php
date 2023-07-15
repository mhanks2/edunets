<!DOCTYPE html>
<html lang="en">
<head>
<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <img class="retangle" src="asset/retangle.png">
    <img class="logo" src="asset/Logo2.png">
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login. Anda ingin <a href="logout.php">Keluar</a> ?</h1>
    <h2>Dapatkan Kelas Premium Yg Ada Di Edunet</h2>
    <h3>Semua Kursus</h3>
    <img class="meja" src="asset/Home Desk.png">
    <img class="kartu1" src="asset/Kartu1.svg">
    <img class="kartu2" src="asset/Kartu2.png">
    <p1>Programming</p1>
    <p2>A programming language is a system of notation for writing computer programs.</p2>
    <p3>Editing</p3>
    <p4>Editing is the process of selecting, cutting and combining images to produce a film/program/show.</p4>
    <a href="pemrograman.html" class="readmore1">Readmore</a>
    <a href="editing.html" class="readmore2">Readmore</a>
</body>
</html>