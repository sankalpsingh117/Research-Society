<?php
session_start();

if(isset($_SESSION['ids'])){
     $_SESSION['email'];
      $ids= $_SESSION['ids'];
  
   
                                  
     }  
   else{
    echo "this is error";
   }   
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("Location: login.php");
exit;
}
//include "dbconn.php"
//$status = $GET_SESSION['status'];






if ($_SERVER["REQUEST_METHOD"] == "POST"){

  //  $id = $_GET['id'];

    
include 'dbconn.php';



//$email = $_SESSION['email'];
 






//picture first
$e_pic1 = $_FILES['e_pic1'];

$filename = $e_pic1['name'];
$filerror = $e_pic1['error'];
$filetmp = $e_pic1['tmp_name'];


$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg','jfif');
if(in_array($filecheck,$fileextstored)){
    $destinationfile = 'event_pic/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
}


//picture second

$e_pic2 = $_FILES['e_pic2'];

$filename1 = $e_pic2['name'];
$filerror1 = $e_pic2['error'];
$filetmp1 = $e_pic2['tmp_name'];


$fileext1 = explode('.',$filename1);
$filecheck1 = strtolower(end($fileext1));

$fileextstored1 = array('png','jpg','jpeg','jfif');
if(in_array($filecheck1,$fileextstored1)){
    $destinationfile1 = 'event_pic/'.$filename1;
    move_uploaded_file($filetmp1,$destinationfile1);
}



//picture third

$e_pic3 = $_FILES['e_pic3'];

$filename2 = $e_pic3['name'];
$filerror2 = $e_pic3['error'];
$filetmp2 = $e_pic3['tmp_name'];


$fileext2 = explode('.',$filename2);
$filecheck2 = strtolower(end($fileext2));

$fileextstored2 = array('png','jpg','jpeg','jfif');
if(in_array($filecheck2,$fileextstored2)){
    $destinationfile2 = 'event_pic/'.$filename2;
    move_uploaded_file($filetmp2,$destinationfile2);
}



//picture fourth
$e_pic4 = $_FILES['e_pic4'];

$filename3 = $e_pic4['name'];
$filerror3 = $e_pic4['error'];
$filetmp3 = $e_pic4['tmp_name'];


$fileext3 = explode('.',$filename3);
$filecheck3 = strtolower(end($fileext3));

$fileextstored3 = array('png','jpg','jpeg','jfif');
if(in_array($filecheck3,$fileextstored3)){
    $destinationfile3 = 'event_pic/'.$filename3;
    move_uploaded_file($filetmp3,$destinationfile3);
}



//picture fifth
$e_pic5 = $_FILES['e_pic5'];

$filename4 = $e_pic5['name'];
$filerror4 = $e_pic5['error'];
$filetmp4 = $e_pic5['tmp_name'];


$fileext4 = explode('.',$filename4);
$filecheck4 = strtolower(end($fileext4));

$fileextstored4 = array('png','jpg','jpeg','jfif');
if(in_array($filecheck4,$fileextstored4)){
    $destinationfile4 = 'event_pic/'.$filename4;
    move_uploaded_file($filetmp4,$destinationfile4);
}




  
$sql="UPDATE `events` set `e_pic1`='$destinationfile', `e_pic2`='$destinationfile1',
 `e_pic3`='$destinationfile2',
  `e_pic4`='$destinationfile3',
   `e_pic5`='$destinationfile4'
    WHERE id='$ids' ";

/*---


$sql = "INSERT INTO `events` (`e_pic1`, `e_pic2`, `e_pic3`, `e_pic4`, `e_pic5`) VALUES ('$destinationfile', '$destinationfile1', '$destinationfile2', '$destinationfile3', '$destinationfile4' ";
---*/
$result =mysqli_query($conn,$sql) or die("Query uncuccesffull :" .mysqli_error($conn));
 
  if ($result){
    echo "Sussfully UPDATED";
    header("Location:./index.php");
    }
    else{
        echo ("error ". mysqli_connect_error());
    }


}






?>