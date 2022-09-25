<?php
	session_start();
	include_once('connection.php');
	$isi = $_SESSION['isi'];

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$ket = $_POST['ket'];
		$sql = "UPDATE $isi SET nama = '$nama', jumlah = '$jumlah', ket = '$ket' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Data Sukses Ditambah';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Ada Kesalahan Dalam Menambahkan Data';
		}
	}
	else{
		$_SESSION['error'] = 'Silahkan Pilih Data Yang Diubah Dahulu';
	}

	header("Location : index.php?isi=$isi");

?>