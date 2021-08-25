<?php 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'koyolearn');



if(isset($_POST['update'])){

	$password = $_POST['password'];

	$query = "UPDATE 'koyolearn' SET fullname ='$_POST['fullname'],username ='$_POST['username'],email ='$_POST['email'], newpassword ='$_POST['newpassword'],country ='$_POST['country'] where password= $_POST['password']";
	$query_run = mysqli_query($connection, $query);

	if($query_run){
		echo'<script type="text/javascript"> alert("data updated") </script>';
	}
	else{
		echo'<script type="text/javascript"> alert("data not updated") </script>';
	}
}


?>
