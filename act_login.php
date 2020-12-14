<?php 
include "koneksi.php";
$username= $_POST['username'];
$password = $_POST['password'];

$op=$_GET['op'];
	if (mysqli_num_rows($h_1)==1) {
		$d_1= $h_1->fetch_array();
		$_SESSION['username']=$d_1['username'];
		$_SESSION['id_user']=$d_1['id_user'];
		header("location: home.php");

	}else{
		?>
	<html>
		<head>
			<title>Dialog Alert</title>
		</head>
		<body>
			<!-- <script>
				alert("Repeat, Wrong Password");
				window.location="login.php";
			</script>	 -->
		</body>
		</html>
<?php
			/*die("password salah <a href=\"javascript:history.back()\">kembali</a>");*/
		}
	# code...
} else if($op == "out"){
	unset($_SESSION['username']);
	unset($_SESSION['id_user']);
	header("location:index.php");
}

 ?>