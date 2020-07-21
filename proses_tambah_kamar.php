<?php
	include "../koneksi.php";

	$kode_kamar = $_POST['kode_kamar'];
	$jenis_kamar = $_POST['jenis_kamar'];
	$tarif_permalam = $_POST['tarif_permalam'];
	$fasilitas = $_POST['fasilitas'];

	//var foto
	$temp = $_FILES['foto']['tmp_name'];
	$foto = $_FILES['foto']['name'];
	$folder = "images/";

	//upload gambar
	move_uploaded_file($temp, $folder.$foto);

	$qSimpanKamar = "INSERT INTO kamar VALUES ('$kode_kamar', '$jenis_kamar','$tarif_permalam','$fasilitas', '$foto')";

	$simpanKamar = mysqli_query($openDB , $qSimpanKamar);

	// echo $simpanKamar;

	if ($simpanKamar = 1) {
		header("location:form_kamar.php");
	}else{
		echo "gagal!!";
	}
?>
