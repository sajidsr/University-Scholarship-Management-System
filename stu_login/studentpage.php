

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Scholarship</title>
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 


  <h1 style="text-align:center;color:white">Scholarship Portal <br><br>

  <?php
   session_start();
   echo  "Welcome, ".$_SESSION['name'];
   ?></h1>
  
    
    <button onclick="st_form()" style="text-align:center;width: 180px">Apply For Scholarship</button>


    <button onclick="track()" style="text-align:center;width: 180px">Track Your Application</button>
    <button onclick="cert()" style="text-align:center;width: 180px">Download Certificates</button>
    <br>
    <br>
    <br>
    <br>
    <button onclick="logout()" style="text-align:center;width: 180px">Logout</button>

  </div>

<script>
  function st_form(){
    document.location.href="../studentform/stu_info.php";

  }
</script>

<script>
  function track(){
    document.location.href="track.php";

  }
</script>
<script>
  function cert(){
    document.location.href="certificate.html";

  }
</script>

<script>
  function logout(){
    document.location.href="../logout/logout.php";

  }
</script>

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
