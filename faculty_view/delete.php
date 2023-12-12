<?php

include "fac_view.php";

if(isset($_GET['ids']))
$id = $_GET['ids'];

$deletequery = "DELETE FROM stu_info WHERE sno=$id";


$query=mysqli_query($con,$deletequery);


if($query){
    ?>
    <script>
        alert('Successfully deleted!!!')
    </script>
<?php
}
else{
    ?>
    <script>
        alert('Not deleted!!!')
    </script>
<?php
}

$con->close();



?>