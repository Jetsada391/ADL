<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adl";


// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
$y = json_decode(file_get_contents("php://input"));

try {
  $conn = new PDO("mysql:host=$servername;dbname=adl", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>