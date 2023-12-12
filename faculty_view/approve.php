
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta status="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for scholarship</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../studentform/style2.css">
</head>
<body>
    <img class="bg" src="../studentform/img_bg.png" alt="ScholarShip">
    <div class="container">
        <h1>Welcome to Apply for scholarship</h3>
        <p>Enter your details and submit this form to confirm your application </p>




    
        <form action="" method="post">

        <?php


include "fac_view.php"; 

if(isset($_GET['id']))
$id = $_GET['id'];

$query="select * from stu_info"; 
$result=mysqli_query($con,$query);


$fetarr = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){

    $id = $_GET['id'];
 
    $status = $_POST['status'];
   
    $updsql = "update stu_info set sno=$id, status='$status' where sno=$id ";

    $uquery = mysqli_query($con,$updsql);


    if($uquery){
        ?>
        <script>
            alert('Successfull !!!')
        </script>
 <?php
    }
    else{
        ?>
        <script>
            alert('OOps Something is wrong!!!')
        </script>
 <?php
    }

    $con->close();
}
?>
<form>


            <input type="text" name="status" id="status" value="Approved">


            <button class="btn" name="submit">OK</button> 
            <a href="facultypage.php" style="color:White;background-color:blue;border:1px solid black;border-radius:8px">Back</a>
        </form>
    </div>



    <script src="index.js"></script>
    
</body>
</html>

