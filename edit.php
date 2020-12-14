<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$umur = $_POST['umur'];
$keluhan = $_POST['keluhan'];


$sql = "UPDATE users SET Nama='$nama', Email='$email', Tanggal_lahir='$ttl',umur='$umur',keluhan='$keluhan' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header("location:data.php?pesan=input");
?>