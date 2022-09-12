

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Galgotias Research Center</title>
  <!---<script src="script.js"></script>--->
  <!---<link rel="stylesheet" href="style.css">--->
  <!-- <link rel="stylesheet" href="index2.css"> -->

  <link rel="icon" type="image/x-icon" href="images/favi.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Caveat:wght@500&family=Cormorant+Garamond&family=Macondo&display=swap" rel="stylesheet">

<style>
  p{
    
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 1.2rem;
    font-weight:300;
    line-height:1.6rem;

  }
.flexc {
  display: flex;
  justify-content: center;
  align-items:flex-end;
  flex-wrap: wrap;
  margin: 40px 10px;
  min-height: 365px;
}
.rg {
  text-align: center;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.container-fluid .flexc .row .rgroup:hover
{
 margin-bottom:;

 /*box-shadow: 10px 10px 10px 3px  lightgrey ;*/
 box-shadow: 0 0 20px 0 rgba(0,0,0,0.4);
 transform: translateY(-20px);
}
.container-fluid .flexc .row .rgroup {
  margin: 7px;
  transition: 0.6s;
  
}
h3{
  font-family: 'Baloo Bhai 2', cursive;
}
#containerf #Part1{
  height:400px;
}
#containerf a{
color:#fff;
text-decoration:none;
cursor:pointer;
}
#visit p{
  color:#fff;
}
nav a{
  color:white;
}
.jumbotron li{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-size: 1.2rem;
    font-weight:300;
    line-height:1.6rem;
}












.counter {
    color: #0B697E;
    background: linear-gradient(#0B697E, #0B697E 43%, transparent 43%, transparent 57%, #0B697E 57%);
    font-family: 'Poppins', sans-serif;
    text-align: center;
    width: 210px;
    height: 210px;
    padding: 43px 28px 35px;
    margin: 0 auto;
    border-radius: 70px;
    position: relative;
    z-index: 1;
}

.counter:before,
.counter:after {
    content: "";
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    top: 13px;
    left: 13px;
    right: 13px;
    bottom: 13px;
    z-index: -1;
}

.counter:after {
    box-shadow: 5px 5px 10px rgba(0, 0, 0, .3);
    top: 23px;
    left: 23px;
    right: 23px;
    bottom: 23px;
}

.counter .counter-icon {
    font-size: 30px;
    margin: 0 0 10px;
}

.counter h3 {
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 9px;
}

.counter .counter-value {
    font-size: 30px;
    font-weight: 600;
    display: block;
}

.counter.green {
    color: #59AE58;
    background: linear-gradient(#59AE58, #59AE58 43%, transparent 43%, transparent 57%, #59AE58 57%);
}

.counter.yellow {
    color: #FEA703;
    background: linear-gradient(#FEA703, #FEA703 43%, transparent 43%, transparent 57%, #FEA703 57%);
}

 .counter.blue {
    color: #0C8AFA;
    background: linear-gradient(#0C8AFA, #0C8AFA 43%, transparent 43%, transparent 57%, #0C8AFA 57%);
}



.fa-facebook-square:hover {
    color: #3B579D;
    cursor: pointer;
}

.fa-linkedin:hover {
    color: #007BB6;
    cursor: pointer;
    
}

.fa-twitter-square:hover {
    color: #2CAAE1;
    cursor: pointer;
}


.social{
  margin:5px;
}


</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark; bg-#940824;" style="background-color:#940824; color:#fff;">
    <a class="navbar-brand" href="index.php">Galgotias Research Society</a>
    <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span  class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Sign In
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="dashboard-admin/html/login.php">Sign In Faculty</a>

            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="dashboard-student/html/login_student.php">Sign In Student</a> -->
          </div>
        </li>

      </ul>
      
    </div>
  </nav>
  <!--- 
  <div class="navbar">
    <ul>
      <li> <a href="index_php.php">HOME</a></li>

<li> <a href="dashboard-admin/html/signup_faculty.php"target="">SIGNUP Faculty</a></li>
  <li> <a href="dashboard-admin/html/login.php"target="">SIGNIN Faculty</a></li>

     
      <li> <a href="dashboard-student/html/signup_student.php"target="">SIGNUP Student</a></li>
      
   <li> <a href="dashboard-student/html/login_student.php"target="">SIGNIN Student</a></li>
    </ul>
  </div>--->
  <div class="pic">
    <img style="width: 100%;" src="images/home1.jpg" alt="">
  </div>

  <div class="jumbotron jumbotron-fluid text-justify">

    <div class="container">
      
        <h3 style="border-bottom:2px solid brown; padding-bottom:3px; display:inline-block;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">VISION
        </h3>
    
      <p class="my-4">

    Create an outstanding atmosphere for researchs and developers and achieve excellence in innovations, creativity, development and research.    
      </p>

    </div>
    <br>
    <div class="container">
    
        <h3 style="border-bottom:2px solid brown; padding-bottom:3px; display:inline-block;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">MISSION
        </h3>
    

      <p class="my-4">
      To enable excellence in research and innovation by :
    <li style="list-style-type:square;">Facilitating and enhancing partnerships and collaborations among researchs funding agencies and industry 4.0</li> 
    <li  style="list-style-type:square;">Providing Hi-Tech technical training , infrastructure to  promotes creativity and support  to established skilled entrepreneurs.</li>
<li  style="list-style-type:square;">
Ensuring  our policies and support advance a culture of innovation while ensuring ethical compliance.
</li>
<li  style="list-style-type:square;">
Foster diverse and inclusive work enviroment.
</li>


      </p>

    </div>
    <br>

  </div>


  <div class="container align-items-center" data-aos="fade-up">
        <center>
            <h4 style="display:inline-block; border-bottom: 2px solid #940824; padding-bottom: 4px; color: #000000;">
                OUR ACHEIVEMENTS</h4>

        </center>
        <br>

        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="counter">
                    <div class="counter-icon"><i class="fa fa-globe"></i></div>
                    <h3>Confrence</h3>
                    <span class="counter-value">20</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counter yellow">
                    <div class="counter-icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                    <h3>Book</h3>
                    <span class="counter-value">40</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counter blue">
                    <div class="counter-icon"><i class="fa fa-thermometer-full" aria-hidden="true"></i></div>
                    <h3>Journal</h3>
                    <span class="counter-value">60</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counter green">
                    <div class="counter-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <h3>Book Chapter</h3>
                    <span class="counter-value">80</span>
                </div>
            </div>
        </div>
    </div>

<br><br>
<center>
  <h2
    style="text-align: center;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;    margin-bottom: 3px; border-bottom:2px solid brown; display:inline-block;">
    RESEARCH GROUPS</h2>
</center>
  <?php/*
   include 'dbconn.php';
            
   $sql1 = "SELECT * FROM `research` ";
   $result = mysqli_query($conn, $sql1);
   while($rows = mysqli_fetch_assoc($result)){

  $category = $rows['category'];
  */
  ?>

  <div class="container-fluid">
    <div class="flexc">
      <div class="row">
        
        <?php
          include 'dbconn.php';
        $cate_query = "SELECT * FROM `research_name_group`";

        $categ = mysqli_query($conn, $cate_query);
        while($rows = mysqli_fetch_assoc($categ))
        {

          
       
        
          
         
        ?>

          <div class="rgroup" style="width:10rem;">
          <a href="dashboard-admin/html/research.php?category=<?php echo $rows['category'];?> " ><img src="<?php echo $rows['pic'];?>" width="150px" height="150px" alt=""></a>
            <P class="rg"><?php  
            echo    $rows['name'];          
       
            ?></P>
            
          </div>
       
          <?php
                                        }
                                       ?>
      </div>
    </div>
  </div>
  <?php
//}

?>

  <br>


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
               <a href="index.php" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;">Home</a> 
            </li>
            <li  style="margin:10px;">
              <a href="about.php" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;"> About</a> 
            </li>
            <li  style="margin:10px;">
              <a href="" style="list-style:none; color:#fff; text-decoration:none; border-top:2px solid #fff; margin:5px;">Blog</a>  
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
             <p  class="text-center" style="color:#fff;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">copyright © 2011  Galgotias University - All right reserved  | Design By Vivek & Sankalp</p>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


            

     <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript">


            $(document).ready(function () {
                $('.counter-value').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4500,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            // Code By Webdevtrick ( https://webdevtrick.com )
            const items = document.querySelectorAll(".accordion a");

            function toggleAccordion() {
                this.classList.toggle('active');
                this.nextElementSibling.classList.toggle('active');
            }

            items.forEach(item => item.addEventListener('click', toggleAccordion));
        </script>

        <script>
            $('.modal').on('click', function (e) {
                e.preventDefault();
                $('#theModal').modal('show').find('.modal-content').load($(this).attr('href'));
            });
        </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 250,
                duration: 1200,
            });
        </script>



</body>

</html>