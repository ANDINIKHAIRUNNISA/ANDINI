<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<h2>Mencari Data Pembeli</h2>

	<form action="" method ="POST">
		<input type="text" name="query" placeholder="Cari Data"/>
		<input type="submit" name="cari" value="Search"/>
	</form>
	<?php
	$query = (isset($_POST['query']) ? $_POST['query'] : '');
	echo $query;
	?>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="pageinput.php">+ Tambah Data Baru</a>

	<h3>Data Pembeli</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tanggal Lahir</th>	
			<th>umur</th>
			<th>keluhan</th>
		</tr>
		<?php 
		include "koneksi.php";
		$sql ="SELECT * FROM users";
		$result = $conn->query($sql);
		$nomor = 1;
		while($data = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Email']; ?></td>
			<td><?php echo $data['Tanggal_lahir']; ?></td>
			<td><?php echo $data['umur']; ?></td>
			<td><?php echo $data['keluhan']; ?></td>
			<td>
				<a class="edit" href="pageedit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>