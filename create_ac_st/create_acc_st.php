<?php
$insert = false;
if(isset($_POST['User'])){
 
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $User = $_POST['User'];
    $Pass = $_POST['Pass'];
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $FatherName = $_POST['FatherName'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    
    
    $sql = "INSERT INTO `stu_info`.`loginform` (`User`,`Pass`,`Fname`,`Lname`,`FatherName`,`Mobile`,`Email`,`Gender`) 
    VALUES ('$User','$Pass','$Fname','$Lname','$FatherName','$Mobile','$Email','$Gender');";
   
    if($con->query($sql) ==true){
 
        $insert = true;

        include "succ1.html";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
