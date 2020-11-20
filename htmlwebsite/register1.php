<?php
session_start();
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='market';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

if(! $conn){
die('Could not connect:'.mysqli_connect_error());
}

// $s="select *from account where email='$email'";
// $result=mysqli_query($conn,$s);
// $num=mysqli_num_rows($result);
// if($num==1){
// 	echo"<p>Student already exist</p>";
// }
// else{
$sql="INSERT INTO account(username,email,password) VALUES('$username','$email','$password')";
 //$sql="DELETE FROM student11 WHERE id='4'";

 if(mysqli_query($conn,$sql)){
 	echo"<script> alert('WELCOME')</script>.$username ";
 }
 else{
 	echo"<script> alert('THERE Will SOME PROBLEM')</script>";
 }
?>