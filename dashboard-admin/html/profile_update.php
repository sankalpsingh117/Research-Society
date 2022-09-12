

<?php


    
include 'dbconn.php';


  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     // $a="submit";
  //  if(isset($_POST['submit'])){
        include 'dbconn.php';
        $id = $_GET['id'];


         
        $name = $_POST["name_new"];
        

       // $clgpass = $_POST["clgpass"];

        $email = $_POST["email_new"];
        $phone = $_POST["phone_new"];

      //  $department = $_POST["department"];
        $password = $_POST["password_new"];
        $c_password = $_POST["c_password_new"];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $c_hashpassword = password_hash($c_password, PASSWORD_DEFAULT);
    
     $query =" UPDATE `faculties` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$hash',`c_password`='$c_hashpassword' WHERE id='$id'";
/*

$accept1 = "UPDATE `faculties` set `name`='$name',`email`='$email',`phone`='$phone',`password`='$hash',`c_password`='$c_hashpassword'  WHERE  id='$id'";

*/
 $accept_query = mysqli_query($conn,$query);

    if ($accept_query){
        echo "success";
     
     }else{
         echo "error";
     }
     
   header("location:/project_Clg/New folder/dashboard-admin/html/index.php");
    }


?>
<html>

<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

<body>



<form action="/project_Clg/New folder/dashboard-admin/html/profile_update.php" method="POST">

<div class="form-group">
  <label class="col-md-12">Enter Your Current Name</label>
   <div class="col-md-12">
    <input type="text" name="name_new"                                               class="form-control form-control-line">
    </div>
   </div>
   <div class="form-group">
  <label class="col-md-12">Enter Your Current Email</label>
   <div class="col-md-12">
    <input type="email" name="email_new"                                               class="form-control form-control-line">
    </div>
   </div>
   <div class="form-group">
  <label class="col-md-12">Enter Your Contact Number</label>
   <div class="col-md-12">
    <input type="number" name="phone_new"                                                class="form-control form-control-line">
    </div>
   </div>
   <div class="form-group">
  <label class="col-md-12">Enter Your Current Password </label>
   <div class="col-md-12">
    <input type="password" name="password_new"                                                class="form-control form-control-line">
    </div>
   </div>
   <div class="form-group">
  <label class="col-md-12">Confirm Your Current Password</label>
   <div class="col-md-12">
    <input type="password" name="c_password_new"                                                class="form-control form-control-line">
    </div>
   </div>

   <button type="submit" name="submit">Updated<button>

  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    </html>