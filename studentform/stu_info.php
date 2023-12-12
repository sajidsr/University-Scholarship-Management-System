<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for scholarship</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <img class="bg" src="img_bg.png" alt="ScholarShip">
    <div class="container">
        <h1>Welcome to Apply for scholarship</h3>
        <p>Enter your details and submit this form to confirm your application </p>
    
        <form name="myForm"  action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" onsubmit="return validateForm()" required>
            <input type="text" name="name" id="name"  placeholder="Enter your name">
            <input type="text" name="father" id="father" placeholder="Enter your Father's name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

            <button class="btn" name="submit">Submit</button> 
            <a href="../stu_login/studentpage.php">Back</a>
        </form>
    </div>
    <script>
  function bak(){
    document.location.href="back.php";

  }
</script>

    <script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
     return false;
  }
  var x1 = document.forms["myForm"]["father"].value;
  if ( x1== "" || x1 == null) {
    alert("Father name must be filled out");
     return false;
  }
  var x2 = document.forms["myForm"]["age"].value;
  if (x2 == "" || x2 == null) {
    alert("Age must be filled out");
     return false;
  }
  var x3 = document.forms["myForm"]["phone"].value;
  if (x3 == "" || x3 == null) {
    alert("Phone number must be filled out");
     return false;
  }
  var x4 = document.forms["myForm"]["email"].value;
  if (x4 == "" || x == null) {
    alert("Email must be filled out");
     return false;
  }
  var x5 = document.forms["myForm"]["gender"].value;
  if (x5 == "" || x5 == null) {
    alert("Gender must be filled out");
     return false;
  }
}
</script>

    <script src="index.js"></script>
    
</body>
</html>

<?php
if(isset($_POST['submit'])){
 
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $father = $_POST['father'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO `stu_info`.`stu_info` (`Name`,`Father`, `DOB`, `gender`, `email`, `phone`, `dt`) VALUES ('$name','$father', '$age', '$gender', '$email', '$phone', current_timestamp());";

    $query = mysqli_query($con,$sql);


    if($query){
        ?>
        <script>
            alert('Submitted Successfully!!!')
        </script>
 <?php
    }
    else{
        ?>
        <script>
            alert('Not Submitted!!!')
        </script>
 <?php
    }

    $con->close();
}
?>
