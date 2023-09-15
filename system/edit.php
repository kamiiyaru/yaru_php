<?php 

	include 'connect.php';

	$id = $_GET['id'];
    $nama_dpn = $_REQUEST['nama_depan'];
    $nama_blkg = $_REQUEST['nama_belakang'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "UPDATE user set nama_depan = '$nama_dpn', nama_belakang = '$nama_blkg', email = '$email', password = '$password' where id = $id";

    header('location: ../view_data.php');

    mysqli_query($conn, $sql)

 ?>