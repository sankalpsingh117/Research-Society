<?php
include 'dbconn.php';
$category = $_GET['category'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_group.css">
  <link rel="stylesheet" href="index2.css">
  <link rel="icon" type="image/x-icon" href="images/favi.png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Galgotias- Events All held</title>
  <style>
    #containerf a {
      color: #fff;
      text-decoration: none;
      cursor: pointer;
    }

    #visit p {
      color: #fff;
    }

    nav a {
      color: white;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark; bg-#940824;" style="background-color:#940824; color:#fff;">
    <a class="navbar-brand" href="../../index.php">Galgotias Research Society</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../../index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../about.php">About</a>
        </li>

      </ul>

    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid" style="height:500px;">
    <center>
    <h5 style="border-bottom:1px solid brown; display:inline-bolck;">
      Events All Held
    </h5>
    </center>
   

 

    <div class="row">
    <?php
include 'dbconn.php';
         
$sql1_e = "SELECT * FROM `events` WHERE `e_category`='$category' ";
$result = mysqli_query($conn, $sql1_e);
while($rows = mysqli_fetch_assoc($result)){
 

?>

      <div class="card mx-5" style="width: 18rem;">
   
        
        <div class="card-body">
          <h5 class="card-title"><?php  echo $rows['e_title'] ?></h5>
          <p class="card-text"><span style="color:red">Start Date :</span><?php  echo $rows['es_date'] ?></p>
          <p class="card-text"><span style="color:red">End Date :</span><?php  echo $rows['ee_date'] ?></p>

          <p class="card-text"><?php  echo $rows['e_category'] ?></p>
          <p class="card-text"><?php  echo $rows['e_desc'] ?></p>
          <a href="../../dashboard-admin/html/event_media.php?id=<?php echo  $rows['id']?>" class="btn btn-primary">Media Visits</a>
        
        </div>

      </div>
      <?php

}?>
    </div>

  </div>

   




  


  <footer>

<div class="container-fluid" style="background-color:#940824; color:#fff;  " >
<div class="container">
    <div class="row">

   
      <div class="col-lg-3">
           <h1>
              Galgotias <br>
               Research  <br>
               Society <br>
           </h1>
      </div>
      <div class="col-lg-3" style="list-style:none; color:#fff; text-decoration:none;">
        <h5>
          Explore
          </h5>
          <li  style="margin:10px;">
             <a href="../../index.php" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;">Home</a> 
          </li>
          <li  style="margin:10px;">
            <a href="../../about.php" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;"> About</a> 
          </li>
          <li  style="margin:10px;">
            <a href="../../index.php" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;">Blog</a>  
          </li>
          
       
      </div>
      <div class="col-lg-3">
          <h5>
              Visit
          </h5>
          <p>
              GALGOTIAS UNIVERSITY
              <br>

Plot No.2, Sector 17-A Yamuna Expressway, Greater Noida, Gautam Buddh Nagar,

Uttar Pradesh, 203201

Phone1:+91 98101 62221
          </p>
      </div>
      <div class="col-lg-3" style="list-style:none; color:#fff; text-decoration:none;">
          <div>
              <h5>
                  Legal
              </h5>
              <li style="margin:10px;"><a href="" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;"> Term and Conditions</a>  </li>
              <li  style="margin:10px;"><a href="" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin-top:10px;"> Privacy Policy</a></li>


          </div> 
          <br>
          <div>
              <h5>Connect With Us</h5>

              <i class="fab fa-facebook-square social fa-2x"></i>
               <i class="fab fa-linkedin social fa-2x"></i> 
              <i class="fab fa-twitter-square social fa-2x"></i>
          </div>
         

      </div>

      </div>
   
      
  </div>
     <div class="container"  style="background-color:#940824; color:#fff;">
           <p  class="text-center" style="color:#fff;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">copyright © 2011 Galgotias University - All right reserved  | Developed By Vivek & Sankalp</p>
       </div>

</div>
</footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>