
    <?php

//if (isset($_POST['deleted_student'])) {

    include 'dbconn.php';
    $id = $_GET['id'];
    $accept = "UPDATE `events` set `status`='1' WHERE  id='$id'";
    $accept_query=mysqli_query($conn,$accept);
       header("location:../index.php");
    
    



?>