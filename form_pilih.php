<?php 
include '../koneksi.php';
$nomor_urut = $_GET['nomor_urut'];

$sql_edit = "SELECT * FROM medical_record where nomor_urut='$nomor_urut' ";
$eksekusi_sql = mysqli_query($openDB, $sql_edit);

$data_edit =mysqli_fetch_assoc($eksekusi_sql); 

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Medical Record</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2 class="alert alert-primary text-center mt-3" align="center">PILIH DATA</h2>
		<form method="post" action="checkout.php" enctype="multipart/form-data">
			<label> NOMOR URUT </label>
			<input class="form-control" type="text" name="nomor_urut" value="<?php echo $data_edit['nomor_urut'];?>" readonly> <!-- $data_edit['id'] menampilkan data id dari array diatas -->

			<label> NAMA PASIEN </label>
			<input class="form-control" type="text" name="nama_pasien" value="<?php echo $data_edit['nama_pasien'];?>">
	
			<label> TANGGAL MASUK </label>
			<input class="form-control" type="text" name="tanggal_masuk" value="<?php echo $data_edit['tanggal_masuk'];?>">

			<label> DIAGNOSA </label>
			<input class="form-control" type="text" name="diagnosa" value="<?php echo $data_edit['diagnosa'];?>">

			<label> ID PASIEN </label>
			<input class="form-control" type="text" name="id_pasien" value="<?php echo $data_edit['id_pasien'];?>">

			<label> ALAMAT </label>
			<input class="form-control" type="text" name="alamat" value="<?php echo $data_edit['alamat'];?>">

			<label> TARIF KAMAR </label>
			<input class="form-control" type="text" name="tarif_kamar" value="<?php echo $data_edit['tarif_kamar'];?>">

			<label> ID DOKTER </label>
			<input class="form-control" type="text" name="id_dokter" value="<?php echo $data_edit['id_dokter'];?>">

			<input type="submit" name="simpan" value="simpan" class="btn-success mt-3">
		</form>
	</div>
</body>
</html>
