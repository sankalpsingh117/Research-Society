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
    <a class="navbar-brand" href="#">Galgotias Research Society</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="faculty_list.php">Previous Page </a>
        </li>
       
     
      </ul>

    </div>
  </nav>


  <div class="jumbotron" style="height:700px;">
    <center>
    <h5 style=" display:inline-bolck; border-bottom:1px solid brown;">
    Update Faculty Detail
    </h5>

    </center>
   

 
    <?php/*- echo htmlspecialchars($_SERVER['PHP_SELF']); --*/?>


 
    <form action="" method="post">
<?php







include 'dbconn.php';
// $ids = $_GET['id'];
$ids = (isset($_GET['id']) ? $_GET['id'] : '');




$query="SELECT * FROM `facuties_member` WHERE id='$ids'";
$show = mysqli_query($conn, $query);

$data =mysqli_fetch_array($show);


   
//  $email = $data['email']; 


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // $idupdate = $_GET['id'];
    // $idupdate  = (isset($_POST['id']) ? $_POST['id'] : '');
    include 'dbconn.php';
     
    $name = $_POST["name"];   
    $categ = $_POST["categ"];
    $clg_id = $_POST["clg_id"];
    $re_area = $_POST["re_area"];
   $number = $_POST["number"];
   
    
    $sql="UPDATE `facuties_member` SET id='$ids', name='$name',categ='$categ', clg_id='$clg_id', re_area='$re_area', number='$number' WHERE id='$ids'";
      
  

        $result = mysqli_query($conn, $sql);
         
          if ($result){
            ?>
            <script>
                alert("Sussfully Updated");
                </script>
           <?php
           header("Location:faculty_list.php");
            }
            else{
                echo ( mysqli_error($conn));
            }
    
    
    
    }
    
    
    ?>
    
    




  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $data['name'];  ?>" >
   
  </div>

  
  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" name="categ" id="category" value="<?php echo $data['categ'];  ?>">
   
  </div>
  <div class="form-group">
    <label for="clg_id">College ID</label>
    <input type="text" class="form-control" name="clg_id" id="clg_id" value="<?php echo $data['clg_id'];  ?>" >
   
  </div>
  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="tel" class="form-control" name="number" id="phone" value="<?php echo $data['number'];  ?>">
   
  </div>
  <div class="form-group">
    <label for="phone">Research Area</label>
    <input type="text" class="form-control" name="re_area" id="phone" value="<?php echo $data['re_area'];  ?>" >
   
  </div>


  
  <button type="submit" class="btn btn-primary">Update Now</button>
  
  
</form>

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
