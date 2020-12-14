<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$umur = $_POST['umur'];
$keluhan = $_POST['keluhan'];



$sql = "INSERT INTO users VALUES('','$nama','$email','$ttl','$umur','$keluhan')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header("location:data.php?pesan=input");
?>