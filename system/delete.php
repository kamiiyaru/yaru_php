<?php 
	$id_user = $_GET['id'];
	$kon = mysqli_connect("localhost", "root", "") or die("Tidak bisa terhubung ke server");
	mysqli_select_db($kon, "login_user") or die("Tidak dapat menemukan database");
	$sql = "DELETE FROM user WHERE id = $id_user ";
	$result = mysqli_query($kon,$sql);

	if (!$result) {
		mysql_error();
	}
	mysqli_close($kon);
	header('location: ../view_data.php');

 ?>