<?php
session_start();

if(isset($_SESSION['email'])){
     $_SESSION['email'];
    $_SESSION['main_pic'];
                                  
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





<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Galgotia University - Research Group">
    <meta name="description" content="Galgotia University - Research Group">
    <meta name="robots" content="noindex,nofollow">
    <title>Galgotia University - Research DashBoard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-icon.jfif">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.jfif" height="50px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-icon.jfif" height="50px" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!---  <img src="../assets/images/logo-icon.jfif" height="50px" alt="homepage" class="dark-logo" />--->
                            <!-- Light Logo text -->
                            <img src="../assets/images/" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                    <span>
                            <P style="font-size:1.5rem;"><?php
                           
                            echo $_SESSION['name'];
                          
                            
                            ?></P>
                        </span>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->

                        <?php
                                     include 'dbconn.php';
                                     $email = $_SESSION['email'];
                                                                                    $sql_query = "SELECT * FROM `faculties` WHERE email='$email'";
                                       $query = mysqli_query($conn,$sql_query);
                                    
                             while ($rows = mysqli_fetch_assoc($query) ) {
                                 
                                        
                                        ?>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php   echo $rows['main_pic']; ?>" alt="user" class="rounded-circle" width="31">

                               
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="signout.php"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    Sign Out</a>
                                
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                                  
                                    <?php
                include 'dbconn.php';
            

                $notification = "SELECT COUNT(status) as total  FROM `student_request` where `status`=''";
                $query_notify = mysqli_query($conn,  $notification);
                $result_notify = mysqli_fetch_assoc($query_notify);
                     // echo total;
                  
                              ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="request_student.php" aria-expanded="false"><i class="mdi mdi-account-plus mx-2"><span class="text-danger font-weight-bolder" style=""><?php echo $result_notify['total'];?></span></i><span
                                    class="hide-menu">Request Students</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                        href="students.php" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                                            class="hide-menu">Students</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="core_student.php" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i><span
                                            class="hide-menu">Core Students</span></a></li>
                                           
                                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                        href="rejected_student.php" aria-expanded="false"><i class="mdi mdi-account-remove"></i><span
                                                            class="hide-menu">Rejected Students</span></a></li>
                       
                                    
                             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="request_faculty.php" aria-expanded="false"><i class="mdi mdi-account-plus mx-2"><span class="text-danger font-weight-bolder" style=""><?php echo $result_notify['total'];?></span></i><span
                                    class="hide-menu">Request Faculty</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="faculty_list.php" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Faculty Members</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="upload_research_admin.php" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span
                                    class="hide-menu">Research Upload</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="research_list.php" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span
                                    class="hide-menu">Research Lists</span></a></li>

                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="upload_event.php" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span
                                    class="hide-menu">Upload Event</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="event_upload_list.php" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span
                                    class="hide-menu">Event List</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="EventsHeld_upload.php" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span
                                    class="hide-menu">Archived</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="error-404.html" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                                    class="hide-menu">404</span></a></li> -->
                        <!---  <li class="text-center p-40 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/"
                                class="btn d-block w-100 btn-danger text-white" target="_blank">Upgrade to Pro</a>
                        </li>--->
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1> 
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">

                     
                            <div class="card-body">
                            
         <center class="m-t-30"> 
             
             
         <img src="<?php   echo $rows['main_pic'] ?>"
                                        class="rounded-circle" width="150" />

                                    
                                    <h4 class="card-title m-t-10"><?php
                           
                           echo $rows['name'];
                          
                           
                           ?></h4>
                                    
                                    <div class="row text-center justify-content-md-center">
                                       <!---- <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>--->
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php
                           
                           echo $rows['email'];
                          
                           
                           ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php
                           
                           echo $rows['phone'];
                          
                           
                           ?></h6> 
                                <!---<small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>-->
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">

                                        <?php
                           
                                 echo $rows['name'];
                           
                           
                           ?>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                     <?php echo $rows['email'];   ?>           
                                             
                                   
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                        <?php echo $rows['phone'];   ?>
                                        </div>
                                    </div>
                                     <!----  <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" value="pass"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                 <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="c_pass" value="password"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>--->
                                 
                                   
                                 
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit" ><a class="text-white" href="profile_update.php?id=<?php  echo $rows['id'];?>">Update Profile</a></button>
                                        </div>
                                  
                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <?php
                                        }
                                       ?>

                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
           
           
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Galgotias University. Designed and Developed by <a
                    href="https://www.wrappixel.com">Galgotias University</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
</body>

</html>