<?php
session_start();
include 'dbconn.php';
$category = $_GET['category'];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>List-faculties</title>
    <style>
        .container-fluid h5 a:hover{
            border-bottom:4px solid yellow;
        }
    </style>
</head>
<body>


<div class="container-fluid" style="background-color:transparent; padding:10px;">



<?php
include 'dbconn.php';

$sql3 = "SELECT * FROM `facuties_member` Where `status`='1' AND `categ`='$category'" ;
$result1 = mysqli_query($conn, $sql3);
while($rows1 = mysqli_fetch_assoc($result1)){


?>

<h5> <a href="../../dashboard-admin/html/faculty_details.php?id= <?php echo $rows1['id']; ?>"  
                    style="text-decoration:none;  color:black; font-size:1.3rem;" target="_blank">
                    <?php echo $rows1['name']; ?>
                  </a></h5>
                  <?php echo '<br>'  ?>
        <?php
    }
    ?>


<!-- <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    <li>Vivek Kumar Saurabh </li>
    
    <li>Vivek Kumar Saurabh </li> -->

</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>