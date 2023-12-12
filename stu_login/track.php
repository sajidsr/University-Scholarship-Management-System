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
    
    <button onclick="fetch.php">Refresh List</button>



</body>
</html>


<?php
include "../faculty_view/fac_view.php"; 
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
		<th colspan="4"><h2>Application Status</h2></th> 
		</tr> 
			  <th> sno </th> 
			  <th> name </th> 
              <th> father </th> 
			  <th> Status </th> 
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
            <td><?php echo $rows['sno']; ?></td> 
		   <td><?php echo $rows['name']; ?></td> 
		   <td><?php echo $rows['father']; ?></td>
		   <td><?php echo $rows['Status']; ?></td>
		</tr>
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>