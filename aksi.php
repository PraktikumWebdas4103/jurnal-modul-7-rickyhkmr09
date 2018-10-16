<?php 

	include 'koneksi.php';


	if (isset($_POST['submit'])) {

		$nama			= $_POST['nama'];

		$nim			= $_POST['nim'];

		$kelamin		= $_POST['kelamin'];

		$prodi 			= $_POST['prodi'];

		$hobi 			= $_POST['hobi'];

		$tmp_hobi		= implode(', ', $_POST['hobi']);

		$fakultas		= $_POST['fakultas'];

		$asal			= $_POST['asal'];

		$motto 			= $_POST['motto'];



		$err = $erNama = $erNim = '';



		if (empty($nama) || empty($nim)) { $err = 'Isi Data Terlebih Dahulu'; }



		if (empty($nama)) { $erNama = 'Nama Tidak Boleh Kosong'; }



		if (empty($nim)) { $erNim = 'NIM Tidak Boleh Kosong'; }


		if (empty($err)) { 

			$sql = "INSERT INTO datamahasiswa (nama, nim, kelamin, prodi, hobi, fakultas, asal, motto) VALUES ('$nama','$nim','$kelamin','prodi','$tmp_hobi','$fakultas','$asal', '$motto')";

			$query = mysqli_query($conn, $sql);



			if ($query) {

				echo "* Data Berhasil Disimpan";

					}else{

				echo "* Data Gagal Disimpan. Pastikan NIM tidak pernah didaftarkan".mysqli_connect_error()."</span>";

			}

		}

	}