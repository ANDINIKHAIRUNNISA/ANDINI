<?php
session_start();
include("koneksi2.php");
if( ! isset($_SESSION['email'])){
    header("location: index.php");
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Selamat Datang <?php
        $email=$_SESSION['email'];
        $sql = "SELECT * FROM pengguna WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo $row["nama"];?>
    </p>

    <p> Email : <?php echo $row["email"]?> </p>
    <a href="logout.php" class="button">Logout</a>
</body>
</html>