<?php
session_start();
include 'dbconn.php';
$category = $_GET['category'];



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favi.png">

    <link rel="stylesheet" href="style_researchgr.css">
    <title>Galgotias - Research Group </title>
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
    <div class="container-fluid header1">

        <div class="res1">

            <div class="container tit">
                <h3 class="h3a">
                    <?php
        
                    include 'dbconn.php';
                             
                    $sql1 = "SELECT * FROM `research_name_group` WHERE `category`='$category' ";
                    $result = mysqli_query($conn, $sql1);
                    while($rows = mysqli_fetch_assoc($result)){
                     
                    echo $rows['name'];
                    }
                    
                    ?>
                    
                    <!-- Web And Mobile Application Development---></h3>
            </div>
        </div>

    </div>

    <div class="jumbotron" style="  border-bottom-left-radius: 40px;border-bottom-right-radius: 40px;">
        <div class="row">


            <div class="col-sm-6" data-aos="fade-left">
                <h3
                    style="border-bottom:4px solid brown; padding-bottom:3px; display:inline-block;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    VISION
                </h3>
             <?php  
             include 'dbconn.php';
             $sql_vission = "SELECT * FROM `vission_mission_objective` WHERE `category`='$category' AND `option`= 'vision' ";

             
             $result = mysqli_query($conn, $sql_vission);
             while($rows = mysqli_fetch_assoc($result)){
              
              ?>
              
              <p class="my-4">
              <?php echo $rows['desc'];?> 
            </p>
         <?php

             }
             
             
             ?>

                


                <br>


                <h3
                    style="border-bottom:4px solid brown; padding-bottom:3px; display:inline-block;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    MISSION
                </h3>



        <p class="my-4 text-justify">


                
                <?php  
             include 'dbconn.php';
             $sql_vission = "SELECT * FROM `vission_mission_objective` WHERE `category`='$category' AND `option`= 'mission' ";

             
             $result = mysqli_query($conn, $sql_vission);
             while($rows = mysqli_fetch_assoc($result)){
              
              ?>
              
            

              <li style="list-style-type:square;" class="text-justify">  <?php echo $rows['desc'];?></li>
             
           
         <?php

             }
             
             
             ?>
 </p>
                  



                </p>

            </div>

            <div class="col-sm-6 align-items-center" data-aos="fade-right">
                <center>
                    <div class="notice" style="padding:15px;">
                        <h4 style="color: #fff; background-color: #bd4f6c; border-radius: 20px; padding:20 0;">
                            NOTICE BOARD
                        </h4>

                        <marquee onmouseover=this.stop() onmouseout=this.start() behavior="" direction="up">
                            <center class="text-justify">
                                <p > <b>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quod.
                                        Pariatur iure nesciunt
                                        blanditiis.
                                        Eos perspiciatis tempora atque tenetur velit? </b></p>
                                <p> <b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quod.
                                        Pariatur iure nesciunt
                                        blanditiis.
                                        Eos perspiciatis tempora atque tenetur velit? </b></p>
                                <p> <b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quod.
                                        Pariatur iure nesciunt
                                        blanditiis.
                                        Eos perspiciatis tempora atque tenetur velit? </b></p>
                            </center>


                        </marquee>
                    </div>

                </center>


            </div>
        </div>


    </div>





    <div class="container align-items-center" data-aos="fade-up">
        <center>
            <h4 style="display:inline-block; border-bottom: 4px solid #940824; padding-bottom: 4px; color: #000000;">
                OUR ACHEIVEMENTS</h4>

        </center>
        <br>

        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="counter">
                    <div class="counter-icon"><i class="fa fa-globe"></i></div>
                    <h3>Confrence</h3>
                    <span class="counter-value">10</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counter yellow">
                    <div class="counter-icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                    <h3>Book</h3>
                    <span class="counter-value">20</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counter blue">
                    <div class="counter-icon"><i class="fa fa-thermometer-full" aria-hidden="true"></i></div>
                    <h3>Journal</h3>
                    <span class="counter-value">30</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counter green">
                    <div class="counter-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <h3>Book Chapter</h3>
                    <span class="counter-value">40</span>
                </div>
            </div>
        </div>
    </div>


    <br><br>






    <div class="container-fluid" style="     
    
    background-color: #bd4f6c;
background-image: linear-gradient(326deg, #bd4f6c 0%, #d7816a 74%);
    ">


        <div class="row">
            <div class="col-sm-6" data-aos="fade-left">
                <div class="objective" style="color:#fff;list-style-type: circle; ">
                    <h4
                        style="display:inline-block; border-bottom: 4px solid #940824; padding-bottom: 4px; color: #fff;">
                        OBJECTIVE</h4>

                        

                
                <?php  
             include 'dbconn.php';
             $sql_vission = "SELECT * FROM `vission_mission_objective` WHERE `category`='$category' AND `option`= 'objective' ";

             
             $result = mysqli_query($conn, $sql_vission);
             while($rows = mysqli_fetch_assoc($result)){
              
              ?>
              
            

              <li style="list-style-type:circle;" class="text-justify">  <?php echo $rows['desc'];?></li>
             
           
         <?php

             }
             
             
             ?>

                  

                </div>

                <div>
                   
                        <a href="join_faculty.php" class=""><button class="btn1">Join Faculty</button></a>
                   
                   
                        <a href="join_student.php"><button class="btn1"> Join Student</button></a>

                  
                </div>

            </div>
            <div class="col-sm-6" id="faculty" data-aos="fade-right">

                <div class="cad">
                    <?php
          include 'dbconn.php';
          $sql_head = "SELECT * FROM `faculties` Where `department`='$category'";
          $result_head = mysqli_query($conn, $sql_head);
          while($rows_head = mysqli_fetch_assoc($result_head)){
            ?>

        <img  src="../../dashboard-admin/html/<?php  echo $rows_head['main_pic']; ?>">
                  
                    <div class="cad-body">
                        <h5>
                            <a
            href="../../dashboard-admin/html/faculty_head_details.php?id=<?php  echo $rows_head['id']; ?>"
            style="text-decoration:none; color:black;"><b style="border-bottom:2px solid brown;">
              <?php  echo $rows_head['name']; ?> 
            </b></a>
                        </h5>
                        <p>
                                                        <center>
                                <b> Head</b> <br>
                             (   <?php echo $rows_head['department'];?> )
                              </center>
                        </p>
                    </div>

                </div>
            
                <?php
            } 
  
  
          ?>
            </div>
        </div>


    </div>

    <div class="container-fluid team">
        <div class="container-fluid team1">
            <center>
                <h4
                    style="display:inline-block; border-bottom: 4px solid #940824; padding-bottom: 4px; color: #fff; margin-top: 20px;">
                    Our Team
                </h4>

            </center>


            <div class="row my-4">
                <div class="col-sm-6 bod11" data-aos="fade-left">
         <center>

         <h4
            style="display:inline-block; border-left: 4px solid #940824; padding-left: 4px; color: #fff;">
            Faculty Members
        </h4>
        <br>
        <br>
       
         <iframe src="facuties_list_member.php?category=<?php echo $category ?>"  style="background-color:transparent; border-radius:30px; height:280px;" frameborder="0"> <a href="?category=<?php $category ?>"></a>  </iframe>

         </center>         
  


      </div>
                <div class="col-sm-6" data-aos="fade-right">

                    <center>
                        <h4
                            style="display:inline-block; border-left: 4px solid #940824; padding-left: 4px; color: #fff;">
                            Student Members
                        </h4>
                        <br>
                        <br>
                        <iframe src="students_member_list.php?category=<?php echo $category ?>" style="background-color:transparent; border-radius:30px; height:280px;" frameborder="0"> <a href="?category=<?php $category ?>"></a>  </iframe>


                    </center>

                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
            

                <div class="col-sm-3 align-items-center">
                    <center>


                        <h4
                            style="display:inline-block; border-left: 4px solid #940824; padding-left: 4px; color: #bd4f6c; margin-top: 50%;">
                            Upcoming Events</h4>

                    </center>
                </div>



                <div class="col-sm-9">

                    <div class="row slider" id="upevents">
                    <?php
include 'dbconn.php';
         
$sql1_e = "SELECT * FROM `events` WHERE `status`='0' AND `e_category`='$category' ";
$result = mysqli_query($conn, $sql1_e);
while($rows = mysqli_fetch_assoc($result)){
 

?>
                        <div class="col-sm-6">

                            <div class="card" style="width: 14rem; height:18rem;">
                                <!-- <img class="card-img-top" src="re1.jpg" alt="Card image cap"> -->
                                <div class="card-body">
                                    <h5 class="card-title"> <?php  echo $rows['e_title'] ?></h5>
                                    <p class="card-text"><span style="color:red">Start Date :</span>
            <?php  echo $rows['es_date'] ?>
          </p>
          <p class="card-text"><span style="color:red">End Date :</span>
            <?php  echo $rows['ee_date'] ?>
          </p>
         

                                </div>
                            </div>
                           
                        </div>

                        <?php

}?>

                       
                       
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <!-- <h5>
      Events Allready Held
    </h5> -->

        <div class="row">
            <div class="col-sm-4" >

                <div class="card1 mx-5" style="width: 18rem;" data-aos="fade-left">
                    <img class="card-img-top" src="mainimage/eventheld.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title py-2">Archived
                        </h5>
                       
                       <a  href="event_all_held.php?category=<?php echo $category?>" 
             >Click Visit</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">

                <img src="mainimage/eventss.jpg" alt="" height="300px" srcset="">



            </div>
            <div class="col-sm-4">


                <div class="card1 mx-5" style="width: 18rem;"data-aos="fade-right">
                    <img class="card-img-top" src="mainimage/Untitled.png" height="270px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title py-2">All Researches</h5>
                       
                        <a href="reseach_list_page.php?category=<?php echo $category?>" class="">Click Visit</a>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <div class="container_fluid my-4">
        <center>
            <h4 style="border-bottom:4px solid brown; display:inline-block; ">
                F &nbsp A &nbsp Q
            </h4>
        </center>



        <div class="container my-4">
            <div class="row">
                <div class="col-sm-12">

                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade show active">
                            <div class="accordion">
                                <div class="card">
                                    <div class="card-header" id="infraOne">
                                        <a href="#collapseOne" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne"
                                            style="text-decoration:none;">
                                            <p class="mb-0">
                                                How can we join the group ?
                                            </p>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="infraOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Click on the join group button and fill out the form then after approval you
                                            can get the
                                            membership of the group
                                        </div>
                                    </div>

                                </div><!-- close card-->


                                <div class="card">
                                    <div class="card-header" id="infraTwo">
                                        <a href="#collapseTwo" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                            style="text-decoration:none;">
                                            <p class="mb-0">After joining, the candidate will be able to do what ?</p>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="infraTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            There are many work profiles in groups such as web developer (backend &
                                            frontend),
                                            Graphics designer, and content writer and you can learn and work with these
                                            profiles

                                        </div>
                                    </div>
                                </div><!-- card-->


                                <div class="card">
                                    <div class="card-header" id="infraThree">
                                        <a href="#collapseThree" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree" style="text-decoration:none;">
                                            <p class="mb-0">What is the advantage or outcome, after joining the group ?
                                            </p>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="infraThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Candidates can gain specialized knowledge about a particular field.
                                        </div>
                                    </div>
                                </div><!-- card-->

                                <div class="card">
                                    <div class="card-header" id="infraFour">
                                        <a href="#collapseFour" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour" style="text-decoration:none;">
                                            <p class="mb-0">Will the website be mobile friendly ?</p>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="infraFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Yes, this website also runs on the mobile .
                                        </div>
                                    </div>
                                </div><!-- card-->


                                <div class="card">
                                    <div class="card-header" id="infraFive">
                                        <a href="#collapseFive" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive" style="text-decoration:none;">
                                            <p class="mb-0">If anyone is not able to join the membership of any group ,
                                                What should i do ?</p>
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="infraFive"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Member should contact to Research group coordinator by e-mail available on
                                            their
                                            research group page
                                        </div>
                                    </div>
                                </div><!-- card-->

                                <div class="card">
                                    <div class="card-header" id="infraSix">
                                        <a href="#collapseSix" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"
                                            style="text-decoration:none;">
                                            <p class="mb-0">If making a website for learning purposes, can we test by
                                                hosting it ?</p>
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="infraSix"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Yes, you can host your website with free hosting providers
                                        </div>
                                    </div>
                                </div><!-- card-->





                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
           <p  class="text-center" style="color:#fff;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">copyright © 2011 Galgotias University - All right reserved  | Design By Vivek & Sankalp</p>
       </div>

</div>
</footer>




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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>



        <script type="text/javascript">
            $('.slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 2,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });
        </script>
        
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