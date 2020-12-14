<html>
<head>
	<title>Koneksi</title>
</head>
<body>
	<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "sistem_informasi";
	$koneksi = mysqli_connect($host, $username, $password, $database);
	if ($koneksi) {
		echo "";
	} else{
		echo "Server not connected";
	}
	?>
</body>
</html>