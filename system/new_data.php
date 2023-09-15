<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add user</title>
</head>
<body>
<?php 
$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "login_user";
    
    $conn = mysqli_connect($server, $username, $password, $db);
         
        // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $nama_dpn = $_REQUEST['nama_depan'];
    $nama_blkg = $_REQUEST['nama_belakang'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO user (nama_depan, nama_belakang, email, password) VALUES ('$nama_dpn', '$nama_blkg', '$email', '$password')";

    $query = mysqli_query($conn, $sql) ;   


$conn->close();

header('location: ../index.php')
?>

</body>	
</html>