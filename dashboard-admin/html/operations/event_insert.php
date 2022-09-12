
<?php




if($_SERVER["REQUEST_METHOD"] == "POST"){
    
 include 'dbconn.php';


//$email = $_SESSION['email'];


$e_title = $_POST["e_title"];
$es_date = $_POST["es_date"];
$ee_date = $_POST["ee_date"];
$e_category = $_POST["e_category"];
$e_desc = $_POST["e_desc"];




$sql = "INSERT INTO `events` (`e_title`, `es_date`, `ee_date`, `e_category`, `e_desc`, `status`) VALUES ('$e_title', '$es_date', '$ee_date', '$e_category', '$e_desc', '0' )";


$result = mysqli_query($conn, $sql);
//or die("Query uncuccesffull :"mysqli_error());
 
  if($result==TRUE){
    ?>
    <script>
      alert("Sussfully Inserted");
      </script>
   <?php
    header("Location:../upload_event.php");
    }
    else{
      echo"error";
        
    }


}






?>
