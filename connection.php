<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "praaks_database";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
  echo "";
}
else {
  die("connection failed bacause".mysqli_connect_error() );
}


 ?>
