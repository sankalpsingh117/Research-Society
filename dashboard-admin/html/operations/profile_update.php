<?php
session_start();

if(isset($_SESSION['email'])){
   // echo $_SESSION['email'];
   
                                  
     }  
   else{
    echo "this is error";
   }   
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: login.php");
exit;
}
//include "dbconn.php"
//$status = $GET_SESSION['status'];

?>
<?php


    
include 'dbconn.php';


  
    //if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a="submit";
    if(isset($a)){
        include 'dbconn.php';
        $id = $_GET['id'];


         
        $name = $_POST["name"];

       // $clgpass = $_POST["clgpass"];

        $email = $_POST["email"];
        $phone = $_POST["phone"];

      //  $department = $_POST["department"];
        $password = $_POST["password"];
        $c_password = $_POST["c_password"];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $c_hashpassword = password_hash($c_password, PASSWORD_DEFAULT);
    

$accept1 = "UPDATE `faculties` set `name`='$name',`email`='$email',`phone`='$phone',`password`='$hash',`c_password`='$c_hashpassword'  WHERE  id='$id'";
 $accept_query=mysqli_query($conn,$accept1);
 //or die("Query uncuccesffull :"mysqli_error());

    if ($accept_query){
        echo "success";
     
     }else{
         die("error" . mysqli_connect_error());
     }
     
   header("location:/index.php");
    }


?>