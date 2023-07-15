<?php 
 
include 'Koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="daftar.css">
</head>
<body>
    <img class="retangle" src="asset/Rectangle 36.png">
    <h1>Terimakasih Telah Mempercayai Kami !!! </h1>
    <div class="login">
        <form action="" method="POST"  >
            <label></label>
            <input type="text" class="input" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            <input type="text" class="input1"placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            <input type="password" class="pasword" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            <input type="password" class="pasword1" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
     
            <button name="submit" class="tmbl-daftar">Register</button>
             <p1>Anda Sudah Punya Akun?</p1>
    
           
             <a href="login.php" class="login">Login</a>
             <img class="logo" src="asset/Logo2.png">
             <img class="bunny" src="asset/bunny.png">
            
        </form> 
       </div>
</body>
</html>