<?php  
	$servername = "localhost";
	$username = "restaurant";
	$password = "";

	// Create connection
	$conn = new mysqli_connect()('localhost', 'restaurant', '');

// Check connection
if ($conn->connect_error){
	die("Connection Failed:" . $conn->connection_error);
}
if(isset($_POST['submit'])){
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$Email = $_POST['Email'];
if($username != '' ||$password !=''){
	$query = "SELECT * FROM 'users' WHERE Firstname='$Firstname' and Lastname='$Lastname' and username='$username' and password='$password' and Email='$Email'";
	echo "<b><center><span>Login successfully! Welcome!</span></center></b>";
}
else{
	echo "<center><p>Login failed.</p><p>Please try again.</p></center>";
}
}
?>