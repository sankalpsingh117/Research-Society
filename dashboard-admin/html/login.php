<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){      
    include 'dbconn.php';
     $email = $_POST["email"];
     
    $password = $_POST["password"];



    //$sql = "SELECT * FROM user WHERE email='$email' AND  password ='$password'";
    $sql = "SELECT * FROM `faculties` WHERE email='$email' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); 
    
    if ($num){
        while($row=mysqli_fetch_assoc($result)){
          $name = $row['name'];
          $department = $row['department'];
          $Phone = $row['phone'];
         $main_pic = $row['main_pic'];
          
            if(password_verify($password, $row['password'])){
                $login = true;
               
                session_start();
               
                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['phone'] = $phone;
                $_SESSION['department'] = $department;
               
                $_SESSION['email'] = $email; 
                 
                $_SESSION['main_pic'] = $main_pic;
  



                ?>
                <script>                           
                        alert("LOGIN Sucessfully");
            
                </script>
                     <?php
              header("Location:index.php");


            }
            else{
                $showError = "Invalid Credentials";
                }

        }
      
     
   
    }
    else{
    $showError = "Invalid Credentials";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet/custyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>


<?php 
      if($login) {
          echo'
         
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </a>
                </div>
                <div class="modal-body">
                You are Logged In
                </div>
                <div class="modal-footer">
                  <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                 
                </div>
              </div>
            </div>
          </div>';
        } 




        if($showError) {
            echo'
            
           
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </a>
                  </div>
                  <div class="modal-body">
                  '.$showError.'
                  </div>
                  <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                   
                  </div>
                </div>
              </div>
            </div>';
          } 
        
        
        
        
        

        ?>
    <div class="wrapper">

        <h1> SIGN IN Faculty </h1>
        <p class="" style="color:red; text-size:1.5rem; text-align:center;"><?php echo $showError ?></p>
        <div class="form_container">
            <form action="login.php" method="POST">
                   
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Email" required class="text-name" name="email">

                </div>
                
                <div class="input-name">
                    <i class="fa fa-lock" style="margin:5px 8px; padding-right:12px;"></i>
                     <input type="password" placeholder="Password" class="name" name="password">
                </div>
                
                <div class="button-group">
                    <div class="button-box">
                        <button class="btn1" type="submit"><i class="fa fa-paper-plane"></i>Log In</button>
                    </div>

                    <div class="input-name">
                        <p>Lost your password ?<a href="#" style="text-decoration:none;">Forgot Password</a>
                        </p>
                       

                    </div>
                    
                </div>

             </form>

        </div>

    </div>

    
</body>
</html>