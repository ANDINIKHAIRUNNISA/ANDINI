<!DOCTYPE html>
<html>
<head>	
</head>
<body>
	
	<a href="data.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
  $sql = "SELECT * FROM users WHERE id='$id'";
  $result = $conn->query($sql);
	$nomor = 1;
	while($data = $result->fetch_array()){
	?>
	<form action="edit.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['Nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $data['Email'] ?>"></td>					
			</tr>	
			<tr>
				<td>Tanggal_lahir</td>
				<td><input type="date" name="ttl" value="<?php echo $data['Tanggal_lahir'] ?>"></td>					
			</tr>	
			<tr>
				<td>umur</td>
				<td><input type="text" name="umur" value="<?php echo $data['umur'] ?>"></td>					
			</tr>	
			<tr>
				<td>keluhan</td>
				<td><input type="text" name="keluhan" value="<?php echo $data['keluhan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>