

<?php

ini_set("display_errors", "1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

$server_name="localhost";
$username="root";
$password="";
$database_name="signup";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['Register']))
{	
	 $firstname = $_POST['First Name'];
	 $lastname = $_POST['Last Name'];
	 $email = $_POST['Email'];
	 
	

	 $sql_query = "INSERT INTO user (First Name,Last Name,Email)
	 VALUES ('$firstname','$lastname','$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

