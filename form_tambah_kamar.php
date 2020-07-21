<!DOCTYPE html>
<html>
<head>
	<title>Identitas Kamar</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2 class="alert alert-primary text-center mt-3" align="center">ISI DATA</h2>
		<form method="post" action="proses_tambah_kamar.php" enctype="multipart/form-data">
			<label> KODE KAMAR </label>
			<input class="form-control" type="text" name="kode_kamar" >

			<label> JENIS KAMAR </label>
			<input class="form-control" type="text" name="jenis_kamar">
	
			<label> TARIF PERMALAM </label>
			<input class="form-control" type="text" name="tarif_permalam">

			<label> FASILITAS </label>
			<input class="form-control" type="text" name="fasilitas">

			<label> FOTO </label>
			<input class="form-control" type="file" name="foto">

			<input type="submit" name="simpan" value="simpan" class="btn-success mt-3">
		</form>
	</div>

</body>
</html>
