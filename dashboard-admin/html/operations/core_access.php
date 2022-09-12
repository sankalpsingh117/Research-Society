<?php
//if (isset($_POST['accept_student'])) {
    include 'dbconn.php';
    $id = $_GET['id'];
  
    $accept = "UPDATE `student_request` set `category`='core' WHERE  id='$id'";
    $accept_query=mysqli_query($conn,$accept);
   header("location:../index.php");
    


?>