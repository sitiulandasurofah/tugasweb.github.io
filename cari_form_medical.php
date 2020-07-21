<!DOCTYPE html>
<html>
<head>
	<title>Medical Record</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<form name="formcari" method="post" action="cari_form_medical.php">
		<table width="330" border="0" align="left" cellpadding="0">
			<tr>
				<td>
					<input type="text" name="yang_dicari"> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="cari" >
				</td>
			</tr>
		</table>
	</form>
	<table class="table table-bordered mt-4">
		<tr align="center" bgcolor="#5EF173">
			<td>NOMOR URUT</td>
			<td>NAMA PASIEN</td>
			<td>TANGGAL MASUK</td>
			<td>DIAGNOSA</td>
			<td>ID PASIEN</td>
			<td>ALAMAT</td>
			<td>TARIF KAMAR</td>
			<td>ID DOKTER</td>
			<td>AKSI</td>
		</tr>

<?php
	include "../koneksi.php";
	$keyword = $_POST ['yang_dicari'];
	$qOpenMedical = "SELECT * FROM medical_record WHERE 
		 nomor_urut like '%$keyword%' ||
		 nama_pasien like '%$keyword%' ||
		 tanggal_masuk like '%$keyword%' ||
		 diagnosa like '%$keyword%' ||
		 id_pasien like '%$keyword%' ||
		 alamat like '%$keyword%' ||
		 tarif_kamar like '%$keyword%' ||
		 id_dokter like '%$keyword%'"
		 ;
	$openMedical = mysqli_query($openDB, $qOpenMedical);
	 while ($row = mysqli_fetch_assoc($openMedical)) {
	 	
?>
		<tr align="center">
			    <td> <?php echo $row['nomor_urut']; ?></td>
				<td> <?php echo $row['nama_pasien']; ?></td>
				<td> <?php echo $row['tanggal_masuk']; ?></td>
				<td> <?php echo $row['diagnosa']; ?></td>
				<td> <?php echo $row['id_pasien']; ?></td>
				<td> <?php echo $row['alamat']; ?></td>
				<td> <?php echo $row['tarif_kamar']; ?></td>
				<td> <?php echo $row['id_dokter']; ?></td>
			
			<td>
				<a href="form_pilih.php?nomor_urut=<?php echo $row['nomor_urut']; ?>">
				<input type="submit" name="simpan" value="pilih" class="btn-success mt-3"></a>
		</tr>
		<?php
	}
	?>
	</table>
	<a class="btn btn-primary mt-3" href="form_tambah_kamar.php"> + &nbsp; Tambah Data</a>
</body>
</html>
