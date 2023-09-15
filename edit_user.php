<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit user</title>
</head>
<body>
	<?php 
	$id = $_GET['id'];

	$conn = mysqli_connect('127.0.0.1','root','','login_user');

	$sql = "SELECT * from user where id = $id";

	$data_view = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($data_view)) {
		echo $row['id']."<br>";
		echo $row['nama_depan']."<br>";
		echo $row['nama_belakang']."<br>";
		echo $row['password']."<br>";
	}

	
	 ?>
</body>
</html>