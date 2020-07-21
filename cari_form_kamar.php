<!DOCTYPE html>
<html>
<head>
	<title>Data Kamar</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<form name="formcari" method="post" action="cari_form_kamar.php">
		<table width="330" border="0" align="left" cellpadding="0">
			<tr>
				<td>
					<input type="text" name="yang_dicari"> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="cari" >
				</td>
			</tr>
		</table>
	</form>
	<table class="table table-bordered mt-4">
		<tr align="center" bgcolor="#FFC3C3">
			<td>KODE KAMAR</td>
			<td>JENIS KAMAR</td>
			<td>TARIF PERMALAM</td>
			<td>FASILITAS</td>
			<td>FOTO</td>
			<td>AKSI</td>
		</tr>

<?php
	include "../koneksi.php";
	$keyword = $_POST ['yang_dicari'];
	$qOpenKamar = "SELECT * FROM kamar WHERE 
		 kode_kamar like '%$keyword%' ||
		 jenis_kamar like '%$keyword%' ||
		 tarif_permalam like '%$keyword%' ||
		 fasilitas like '%$keyword%' ||
		 foto like '%$keyword%'"
		 ;
	$openKamar = mysqli_query($openDB, $qOpenKamar);
	 while ($row = mysqli_fetch_assoc($openKamar)) {
	 	
?>
		<tr align="center">
			<td> <?php echo $row['kode_kamar']; ?></td>
				<td> <?php echo $row['jenis_kamar']; ?></td>
				<td> <?php echo $row['tarif_permalam']; ?></td>
				<td> <?php echo $row['fasilitas']; ?></td>
			<td style="text-align: center;"><img src="images/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
			<td>
				<form method="post" action="../dokter/form_dokter.php" enctype="multipart/form-data">
				<input type="submit" name="simpan" value="pilih" class="btn-success mt-3">
		</tr>
		<?php
	}
	?>
	</table>
	<a class="btn btn-primary mt-3" href="form_tambah_kamar.php"> + &nbsp; Tambah Data</a>
</body>
</html>
