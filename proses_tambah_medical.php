<?php
	include "../koneksi.php";

	$nomor_urut = $_POST['nomor_urut'];
	$nama_pasien = $_POST['nama_pasien'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$diagnosa = $_POST['diagnosa'];
	$id_pasien = $_POST['id_pasien'];
	$alamat = $_POST['alamat'];
	$tarif_kamar = $_POST['tarif_kamar'];
	$id_dokter = $_POST['id_dokter'];

	$qSimpanMedical = "INSERT INTO medical_record VALUES ('$nomor_urut', '$nama_pasien','$tanggal_masuk','$diagnosa', '$id_pasien','$alamat', '$tarif_kamar','$id_dokter')";

	$simpanMedical = mysqli_query($openDB , $qSimpanMedical);

	// echo $simpanMedical;

	if ($simpanMedical = 1) {
		header("location:form_medical.php");
	}else{
		echo "gagal!!";
	}
?>
