<?php 
define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'portfolio'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

//inserting Record to the database 
//when the user enter data to the contact.html form and press Send Message button, so the data will be come to this connectivity.php file and store in $name, $email, and $message variables.

$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['message']; 
$query = "INSERT INTO loginInfo(name,email) VALUES('$name','$email')"; 
$result = mysql_query($query); 

if($result) 
	{
 	echo "Successfully updated database";
	echo "<br>";
	echo "Thank you for contacting. For fast response, please contact me directly at chuankengchou@gmail.com"; 
 	} 
	else { die('Error: '.mysql_error($con)); 
	} 
	mysql_close($con); 
?>
