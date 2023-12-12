

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

<div class="container">
  <form action="stu_auth.php" method="post">
    <p>Student Login</p>
    <input type="text" id="username" name="username" placeholder="StudentID"><br>
    <input type="password" id="password" name="password" pattern=".{3,12}" required title="Password must be between 3 to 12 character" placeholder="Password"><br>
    <input type="submit" name="submit" value="Login" class="btn-login"/>


    <a href="../create_ac_st/create_ac_st.html">Create Account</a>
  </form>

  <script>
function cr1(){
  document.location.href="../create_ac_st/create_ac_st.html";

}
  </script>



  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
