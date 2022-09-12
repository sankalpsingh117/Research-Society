<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    include 'dbconn.php';
     
    $name = $_POST["name"];   
   
    $department = $_POST["department"];
    $categ = $_POST["categ"];
    $clg_id = $_POST["clg_id"];
    $email = $_POST["email"];
    $re_area = $_POST["re_area"];
    $number = $_POST["number"];

    

$main_pic = $_FILES['main_pic'];

$filename = $main_pic['name'];
$filerror = $main_pic['error'];
$filetmp = $main_pic['tmp_name'];


$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg','jfif');
if(in_array($filecheck,$fileextstored)){
    $destinationfile = 'faculty_member/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
}

   
    
    
    
    
    
   
    
    //check whether this email is exists
    $existsql = "SELECT * FROM `facuties_member` WHERE email = '$email'";
    $result = mysqli_query($conn, $existsql);
    $numExitsRows = mysqli_num_rows($result);
    if($numExitsRows){
        ?>
        <script>
        alert("Email Or College ID Already Exists ");
            </script>
     <?php
    }else{
       // $exists =false;
    
    
     
    
       $sql=" INSERT INTO `facuties_member`(`name`, `department`, `categ`, `clg_id`, `email`, `re_area`, `number`, `main_pic`, `status`, `datetime`) VALUES ('$name','$department','$categ','$clg_id','$email', '$re_area', '$number', '$destinationfile', '0',current_timestamp()) ";
    
        $result = mysqli_query($conn, $sql);
         
          if ($result){
            echo "Sussfully Inserted";
            }
            else{
                echo ( mysqli_error($conn));
            }
    }
    
    
    }
    
    
    
    
    



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script>
            function empty() {
                if (document.getElementById('input1').value == "") {
                    document.getElementById("err").innerHTML = "Enter Name";
                    event.preventDefault();
                } else if (document.getElementById('input2').value == "") {
                    document.getElementById("err").innerHTML = "Select Department";
                    event.preventDefault();
                }else if (document.getElementById('input3').value == "") {
                    document.getElementById("err").innerHTML = "Enter College ID";
                    event.preventDefault();
                }else if (document.getElementById('input4').value ==" ") {
                    document.getElementById("err").innerHTML = "Enter Research Area";
                    event.preventDefault();
                }else if (document.getElementById('input5').value == "") {
                    document.getElementById("err").innerHTML = "Enter Email";
                    event.preventDefault();
                } else if (document.getElementById('input6').value == "") {
                    document.getElementById("err").innerHTML = "Enter Contact";
                    event.preventDefault();
                }else if (document.getElementById('input7').value == "") {
                    document.getElementById("err").innerHTML = "Select Recent Profile Pic and your file should be .jpg/.jpeg/.png/.jfif";
                    event.preventDefault();
                }
            }
        </script>
    <style>
        .header1 {
            background-image: url("mainimage/join.jpeg");
            height: 600px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            /* background-attachment: fixed; */
            position: relative;
        }

        .res1 {
            background-color: #0000008a;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }


        
        a {
            margin: 0px 15%;
        }

        #bdy {
            background-color: #d7cec7;
        }

        .main {
            background-color: white;
            width: 27%;
            margin: auto;
            margin-top: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-radius: 5px;

        }

        #btn {
            background-color: #76323f;
            color: rgb(255, 255, 255);
            margin: 17px 23%;
            width: 50%;
            height: 40px;
            border-radius: 5px;
            border-color: #76323f;

        }

        #btn:hover {
            background-color: #940824;
            border-color: #940824;
            cursor: pointer;

        }

        .input {
            width: 65%;
            height: 35px;
            margin: 12px 15%;
            border-radius: 20px;
            border: none;
        }

      select{
        width: 65%;
         height: 39px;
         margin: 12px 15%;
         border-radius: 20px;
      }


        h2 {
            text-align: center;
            padding-top: 25px;

        }

        .label {
            margin: 15px 15%;
        }

        .signup {
            margin: 0px 33%;
            padding-bottom: 25px;

        }

        @media screen and (max-width: 650px) {
            .main {
                width: 70%;
            }
        }
    </style>
    <title>Join faculty</title>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark; bg-#940824;" style="background-color:#940824; color:#fff;">
        <a class="navbar-brand" href="../../index.php" style="color: #fff;">Galgotias Research Society</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            style="color: #fff;">
            <span class="navbar-toggler-icon" style="color: #fff;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../../index.php" style="color:#fff;">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../about.php" style="color:#fff;">About</a>
                </li>
           

            </ul>

        </div>
    </nav>
    <div class="container-fluid" id="bdy">
        <div class="row">
            <div class="col-lg-6 header1">
                <div class="res1" style="color:#fff; justify-content: center; text-align: center;"> 
                    <div style="margin-top:50%; width:400px; margin-left: auto; margin-right: auto;">
                        
                            <h3 style="border-bottom:4px solid #940824; display:inline-block; padding-bottom: 5px;">
                                Join Faculty
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio facere culpa error commodi sint? Unde eum quia, nobis rem, deserunt sit temporibus perferendis dolorem saepe sint quisquam commodi amet est.</p>
    
                     

                    </div>
                   
                  

            </div>
            </div>

            <div class="col-lg-6">
              
                    <div class="container" style="margin:auto;  width:100%;">
                    <center>
                        <h3>
                            Join Now
                        </h3>
                        <p id="err" style="color:red;text-align:center;"></p>

                    </center>
                       
                      
                        <form action="join_faculty.php" method="POST" enctype="multipart/form-data">
            
                            <input id="input1" class="input" type="text" name="name" placeholder="Name"><br>
                
                            <select class="" id="input2" name="department">
                                <option value="Department">Department</option>
                                <option value="Dept. Computer Science And Engineering">Dept. Computer Science And Engineering</option>
                                <option value="Dept. Computer Application">Dept. of Computer Application</option>
                               
                            </select>
                
                            <select class="" id="category" name="categ">
                                <option value="research_group">Research Groups</option>
                <option value="Web and Mobile Application Development">Web and Mobile
                                            Application Development</option>
                         <option value="Computer Network">Computer 
                                            Network</option>
                                <option value="Data Science And AI">Data Science
                                            And AI</option>
                                <option value="Cyber Security And Privacy">Cyber Security And Privacy</option>
                 <option value="Computer Graphics And Digital Image Processing">Computer Graphics
                                            And Digital
                                            Image Processing</option>
                 <option value=" Cloud Computing And Distributed System"> Cloud Computing
                                            And Distributed
                                            System</option>
                  <option value="Core And Emerging Technologies"> Core And Emerging Technologies</option>
                
                                           
                
                                 </select>
                                
                            
                            <input id="input3" class="input" type="text" name="clg_id" placeholder="COLLEGE ID"><br>
                            <input id="input4" class="input" type="text" name="re_area" placeholder="Research Area "><br>
                           
                            <input id="input5" class="input" type="text" name="email" placeholder="Email"><br>
                            <input id="input6" class="input" type="text" name="number" placeholder="Contact"><br>
                                                  
                            <input id="input7" class="input" type="file" name="main_pic" title="Profile Pic"><br>
                
                
                            
                            
                           
                        
                            <button onclick="empty()" id="btn" type="submit">JOIN NOW</button>
                        </form>

                       
    
                       
                    </div>
                
                       
    
                    </div>
            </div>

           
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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