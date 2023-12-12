
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
 
    $name = $_POST['name'];
    $father = $_POST['father'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $updsql = "update stu_info set sno=$id, name='$name', father='$father', gender='$gender', age='$age', email='$email', phone='$phone' where sno=$id ";

    $uquery = mysqli_query($con,$updsql);


    if($uquery){
        ?>
        <script>
            alert('Successfully updated!!!')
        </script>
 <?php
    }
    else{
        ?>
        <script>
            alert('Not updated!!!')
        </script>
 <?php
    }

    $con->close();
}
?>



            <input type="text" name="name" id="name" value="<?php echo $fetarr['name'] ; ?>" placeholder="Enter your name">
            <input type="text" name="father" id="father" value="<?php echo $fetarr['father'] ; ?>" placeholder="Enter your Father's name">
            <input type="text" name="age" id="age" value="<?php echo $fetarr['age'] ; ?>" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" value="<?php echo $fetarr['gender'] ; ?>" placeholder="Enter your gender">
            <input type="email" name="email" id="email" value="<?php echo $fetarr['email'] ; ?>" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" value="<?php echo $fetarr['phone'] ; ?>" placeholder="Enter your phone">

            <button class="btn" name="submit">Update</button> 
            <a href="back.php">back</a>
        </form>
    </div>



    <script src="index.js"></script>
    
</body>
</html>

