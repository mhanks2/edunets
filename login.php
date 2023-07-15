<?php 
 
include 'Koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('WHOOOPSSSS Username atau password yang anda masukan salah')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
   <img class="logo" src="asset/Logo.svg"> 
   <img class="tangga" src="asset/Tangga.png">
   <div class="login">
    <p><a href="https://accounts.google.com/" class="tbl-gugel"><img src="asset/Gugel.svg"></a></p>
    <form action="" method="POST"  >
        <label></label>
        <input type="text" class="input"placeholder="Email/Username"  name="email" value="<?php echo $email; ?>" required>
        <p1>OR</p1>
        <input type="password" class="pasword" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>

        <button name="submit" class="tmbl-login"><a>Login</a></button>
         <a href="admin2/login.php" class="lupa">Masuk Sebagai Admin</a>

         <img class="globe" src="asset/Globe.svg">
         <img class="pulpen" src="asset/Pulpen.png">
         <p2>No Account?</p2>
         <a href="daftar.php" class="create">Create One</a>
    </form> 
   </div>
</body>
</html>