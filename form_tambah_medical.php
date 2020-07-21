<!DOCTYPE html>
<html>
<head>
	<title>Medical Record</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2 class="alert alert-primary text-center mt-3" align="center">ISI DATA</h2>
		<form method="post" action="proses_tambah_medical.php" enctype="multipart/form-data">
			<label> NOMOR URUT </label>
			<input class="form-control" type="text" name="nomor_urut" >

			<label> NAMA PASIEN </label>
			<input class="form-control" type="text" name="nama_pasien">
	
			<label> TANGGAL MASUK </label>
			<input class="form-control" type="text" name="tanggal_masuk">

			<label> DIAGNOSA </label>
			<input class="form-control" type="text" name="diagnosa">

			<label> ID PASIEN </label>
			<input class="form-control" type="text" name="id_pasien">
	
			<label> ALAMAT </label>
			<input class="form-control" type="text" name="alamat">

			<label> TARIF KAMAR </label>
			<input class="form-control" type="text" name="tarif_kamar">

			<label> ID DOKTER </label>
			<input class="form-control" type="text" name="id_dokter">

			<input type="submit" name="simpan" value="simpan" class="btn-success mt-3">
		</form>
	</div>

</body>
</html>
