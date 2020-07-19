<?php

	include 'connect.php';

	$nik = $_POST['nik'];
	$password = $_POST['password'];

	$queryResult=$connect->query("SELECT * FROM pengguna WHERE nik='".$nik."' and password='".$password."'");
	$result=array();

	$fetchData=$queryResult->fetch_assoc();

		if (count($fetchData) > 0) {
			$queryResultWarga=$connect->query("SELECT * FROM warga WHERE nik='".$nik."'");

			$fetchDataWarga=$queryResultWarga->fetch_assoc();

				$result['code'] = 200;
				$result['message'] = "Berhasil";
				$result['hak_akses'] = $fetchData['hak_akses'];
				$result['nik'] = $fetchData['nik'];
				$result['no_hp'] = $fetchData['no_hp'];
				$result['nama'] = $fetchDataWarga['nama'];
				$result['no_kk'] = $fetchDataWarga['no_kk'];
				$result['jenis_kelamin'] = $fetchDataWarga['jenis_kelamin'];
				$result['tempat_lahir'] = $fetchDataWarga['tempat_lahir'];
				$result['tanggal_lahir'] = $fetchDataWarga['tanggal_lahir'];
				$result['golongan_darah'] = $fetchDataWarga['golongan_darah'];
				$result['agama'] = $fetchDataWarga['agama'];
				$result['status_kawin'] = $fetchDataWarga['status_kawin'];
				$result['pendidikan'] = $fetchDataWarga['pendidikan'];
				$result['pekerjaan'] = $fetchDataWarga['pekerjaan'];
				$result['alamat'] = $fetchDataWarga['alamat'];
		}else{
			$result['code'] = 500;
				$result['message'] = "Gagal";
				$result['hak_akses'] = "";
				$result['nik'] = "";
				$result['no_hp'] = "";
				$result['nama'] = "";
				$result['no_kk'] = "";
				$result['jenis_kelamin'] = "";
				$result['tempat_lahir'] = "";
				$result['tanggal_lahir'] = "";
				$result['golongan_darah'] = "";
				$result['agama'] = "";
				$result['status_kawin'] = "";
				$result['pendidikan'] = "";
				$result['pekerjaan'] = "";
				$result['alamat'] = "";
		}


	echo json_encode($result);

?>