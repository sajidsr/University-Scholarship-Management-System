<?php

$host="localhost";
$user="root";
$password="";
$db="stu_info";

session_start();

$con=mysqli_connect($host,$user,$password,"student_cre");
mysqli_select_db($con,$db);

if(isset($_POST['submit'])){
$uname=$_POST['username'];

$password=$_POST['password'];


$sql="select * from loginform where user ='".$uname."' AND pass='".$password."' limit 1";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){

  header("location:studentpage.php");

  $sq="select Fname from loginform where Pass='$password'";
  $name=mysqli_query($con,$sq);
  $_SESSION['name'] = $uname;

  
  


}
else{
  echo "Incorrect Credentials!!!";
  exit();
}

}


?>
