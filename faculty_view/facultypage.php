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


    <h2 style="text-align:center;color:white">Scholarship Portal</h2>
    
    <button onclick="fetc()">Refresh List</button>
     <br>
    <button onclick="logout()" style="text-align:center;width: 180px">Logout</button>

<script>
  function fetc(){
    document.location.href="../faculty_view/fetch.php";
  }


  function logout(){
    document.location.href="../logout/logout.php";

  }
  </script>

</body>

</html>


<?php
include "fac_view.php"; 
$query="select * from stu_info"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> sno </th> 
			  <th> name </th> 
              <th> father </th> 
              <th> age </th> 
              <th> gender </th> 
			  <th> email </th> 
			  <th> phone </th> 
              <th> dt </th> 
            
              <th colspan="3"> Operations </th> 
			  <th> Status </th> 
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
            <td><?php echo $rows['sno']; ?></td> 
		   <td><?php echo $rows['name']; ?></td> 
		   <td><?php echo $rows['father']; ?></td> 
		   <td><?php echo $rows['age']; ?></td> 
           <td><?php echo $rows['gender']; ?></td> 
           <td><?php echo $rows['email']; ?></td> 
           <td><?php echo $rows['phone']; ?></td>
           <td><?php echo $rows['dt']; ?></td>  
           <td><a href="../faculty_view/approve.php?id=<?php echo $rows['sno']; ?>" style="color:white;background-color:green;border:1px solid green;border-radius:8px">Action</a></td>
           <td><a href="../faculty_view/update.php?id=<?php echo $rows['sno']; ?>" style="color:white;background-color:blue;border:1px solid blue;border-radius:8px">edit</a></td>
           <td><a href="../faculty_view/delete.php?ids=<?php echo $rows['sno']; ?>" style="color:white;background-color:red;border:1px solid red;border-radius:8px">Delete</a></td>
		   <td><?php echo $rows['Status']; ?></td>
		</tr>
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>