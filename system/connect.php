<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mysql Connection test</title>
</head>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "login_user");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";  ?>

<?php  
$sql = "SELECT * from siswa";
$result = $conn->query($sql); 


?>
<!-- // if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<br><p>id : " . $row ["id"] . ", nama : " . $row["nama_depan"] . ", nama Lengkap : " . $row["nama_belakang"] . ", alamat : " . $row["alamat"];
//   }
// } else {
//   echo "0 results";
// } -->

<a href="../index.php"><button>test</button></a>

</body>
</html>