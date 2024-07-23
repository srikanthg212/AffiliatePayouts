<?php


$config=array(
'DB_HOST'=>'localhost',
'DB_USERNAME'=>'root',
'DB_PASSWORD'=>'',
'DB_DATABASE'=>'affiliate_marketing'
);

   $hostname = $config['DB_HOST'];
   $database = $config['DB_DATABASE'];
   $username = $config['DB_USERNAME'];
   $password = $config['DB_PASSWORD'];


// Create connection
$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>