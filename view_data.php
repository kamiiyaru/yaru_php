<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data page</title>
	<style type="text/css">
		table {
  			border:1px solid black;
		}

		td , th{
			border: 1px solid;
		}
		a {
			padding-left: 5px;
			padding-right: 5px;
		}
	</style>
</head>
<body>
<?php 
$conn = mysqli_connect('127.0.0.1', 'root', '', 'login_user');

if(!$conn) {
	echo mysql_error();
}

$query = "SELECT * from user";

$data = mysqli_query($conn, $query);


	while($row = mysqli_fetch_array($data)){
	echo "<table>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>nama depan</th>";
	echo "<th>nama belakang</th>";
	echo "<th>email</th>";
	echo "<th colspan='2'>action</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['nama_depan'] . "</td>";
	echo "<td>" . $row['nama_belakang'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td><a href='./system/delete.php?id=".$row['id']."'> DELETE </a></td>";
	echo "<td><a href='edit_user.php?id=".$row['id']."'>EDIT</a></td>";
	echo "</tr>";


	}

echo "</table>";
?>

<a href="index.php"><button style="margin-top: 50px;">get back asshole</button></a>

</body>
</html>