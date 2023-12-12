<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$con=mysqli_connect($host,$user,$password,"demo");
mysqli_select_db($con,$db);

if(isset($_POST['username'])){
$uname=$_POST['username'];
$password=$_POST['password'];


$sql="select * from loginform where user ='".$uname."' AND pass='".$password."' limit 1";


$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
include "../faculty_view/facultypage.php";

}
else{
  echo "Incorrect Credential";
  exit();
}

}


?>