<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Scholarship</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 


<div class="container">
    <h1 style="text-align:center;color:white">Scholarship Portal</h1>
    
    <button onclick="stu_log()" style="width: 180px">Student Login</button>
    <button onclick="fac_log()" style="width: 180px">Admin Login</button>
  
</div>


<script>
  function stu_log(){
    document.location.href="./stu_login/stu_login.php";
  }
</script>
<script>
  function fac_log(){
    document.location.href="./fac_login/faculty_login.php";
  }
</script>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
