<?php 

include "koneksi2.php";
$username=$_POST['username'];
$password=$_POST['password'];
$ulangi=$_POST['ulangi'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

if ($password == $ulangi) {

	// $md5=md5($password);
	$sql="INSERT INTO register (username, password, ulangi, first_name, last_name, email) VALUES ('".$username."','".$password."','".$ulangi."','".$first_name."','".$last_name."','".$email."')";
	$a=$koneksi->query($sql);

	if($a === true){ ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Dialog Alert</title>
		</head>
		<body>
			<script>
				alert("You Have Successfully Registered");
				window.location="index.php";
			</script>	
		</body>
		</html>
	<?php
	} else{
		echo mysqli_error($koneksi);
	}
}else{ ?>
	<html>
		<head>
			<title>Dialog Alert</title>
		</head>
		<body>
			<script>
				alert("Repeat, Your Passwords Are Not The Same");
				window.location="register.php";
			</script>	
		</body>
		</html>
<?php
}	

 ?>