<?php
	session_start();
	include_once('connection.php');
	$isi = $_SESSION['isi'];

	if(isset($_POST['add'])){
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$ket = $_POST['ket'];
		$sql = "INSERT INTO $isi (nama, jumlah, ket) VALUES ('$nama', '$jumlah', '$ket')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Data Berhasil DiTambahkan';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Ada Sebuah Kesalahan Dalam Menambahkan Data';
		}
	}
	else{
		$_SESSION['error'] = 'Tolong Isi Semua Data Dengan Benar';
	}

	header("Location: index.php?isi=$isi");
?>