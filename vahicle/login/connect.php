<?php
$host="localhost";
$username="root";
$password="";
$database="login";
// Create connection
$conn =new mysqli($host, $username, $password, $database);
if($conn->connect_error ){
   echo "Faild Connect Db".$conn->connect_error;
}


?>