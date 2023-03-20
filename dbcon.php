<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "test";
//$con=mysqli_connect('localhost','admin','1111');
$con = mysqli_connect($server, $username, $password);
// $con=mysqli();
if(!$con){
  die("connection to this database failed due to" . mysqli_connect_error());
}
// {
//   // echo "Success connecting to the db";
// }
?>