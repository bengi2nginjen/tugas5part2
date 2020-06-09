<?php
$servername = "dbtugas5.cenzylrufou4.us-east-1.rds.amazonaws.com";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Can't connect to database");

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>
<?php
//session_start();

//$conn = mysqli_connect(
//  'localhost',
//  'root',
//  'password123',
//  'php_mysql_crud'
//) or die(mysqli_erro($mysqli));

?>
