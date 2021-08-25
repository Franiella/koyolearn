<?php 
   $fullname = $_POST['fullname'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $country = $_POST['country'];
   $rad = $_POST['rad'];

//database connection
$conn = new mysqli('localhost','root','','koyolearn');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt = $conn->prepare("insert into koyolearn(fullname, username, email, password, country, rad) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssss",$fullname, $username, $email, $password, $country, $rad);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}

?>