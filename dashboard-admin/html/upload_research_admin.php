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




if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
include 'dbconn.php';

$email = $_SESSION['email'];
 
$r_title = $_POST["r_title"];
$r_subtitle = $_POST["r_subtitle"];
$category = $_POST["category"];
$r_desc = $_POST["r_desc"];
$cat = $_POST["cat"];




//picture first
$pic_main = $_FILES['pic_main'];

$filename = $pic_main['name'];
$filerror = $pic_main['error'];
$filetmp = $pic_main['tmp_name'];


$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg','jfif');
if(in_array($filecheck,$fileextstored)){
    $destinationfile = 'research_picture/research_mainpic/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
}


//picture second

$pic_subone = $_FILES['pic_subone'];

$filename1 = $pic_subone['name'];
$filerror1 = $pic_subone['error'];
$filetmp1 = $pic_subone['tmp_name'];


$fileext1 = explode('.',$filename1);
$filecheck1 = strtolower(end($fileext1));

$fileextstored1 = array('png','jpg','jpeg','jfif');
if(in_array($filecheck1,$fileextstored1)){
    $destinationfile1 = 'research_picture/research_subone/'.$filename1;
    move_uploaded_file($filetmp1,$destinationfile1);
}



//picture third
$pic_subtwo = $_FILES['pic_subtwo'];

$filename2 = $pic_subtwo['name'];
$filerror2 = $pic_subtwo['error'];
$filetmp2 = $pic_subtwo['tmp_name'];


$fileext2 = explode('.',$filename2);
$filecheck2 = strtolower(end($fileext2));

$fileextstored2 = array('png','jpg','jpeg','jfif');
if(in_array($filecheck2,$fileextstored2)){
    $destinationfile2 = 'research_picture/research_subtwo/'.$filename2;
    move_uploaded_file($filetmp2,$destinationfile2);
}





$rand_id = rand(0001,9999);

$sql = "INSERT INTO `research` (`rand_id`, `email`, `r_title`, `r_subtitle`, `category`, `cat`, `r_desc`, `pic_main`, `pic_subone`, `pic_sobtwo`, `datetime`) VALUES ('$rand_id', '$email', '$r_title', '$r_subtitle', '$category', '$cat', '$r_desc', '$destinationfile', '$destinationfile1', '$destinationfile2', current_timestamp()) ";

$result = mysqli_query($conn, $sql);
 
  if ($result){
    echo "Sussfully Inserted";
    header("Location:upload_research_admin.php");
    }
    else{
        echo ("error ". mysqli_connect_error());
    }


}






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
    <title>Galgotia University - Upload Research </title>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
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
                              <li class="breadcrumb-item active" aria-current="page">Upload Research</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Upload Research</h1> 
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
                 <!--- <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                          
                        </div>
                    </div>--->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST" action="upload_research_admin.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12" for="r_title">Research Title</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control form-control-line" name="r_title" id="r_title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="r_subtitle" class="col-md-12">Research Subtitle</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control form-control-line" name="r_subtitle"
                                                id="r_subtitle">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="category" class="col-md-12">Category </label>
                                    <select class="" id="category" name="category" >
                                   
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
                </div>

                <div class="form-group">
                                    <label for="cat" class="col-md-12">Research Types </label>
                                    <select class="" id="category" name="cat" >

                <option value="Research Paper">Research Paper</option>
                <option value="Patent">Patent</option>
                <option value="Copyright">Copyright</option>
                <option value="Book">Book</option>
                <option value="Book Chapter">Book Chapter</option>
                            <option value="Project"> Project</option>
                           

                           

                 </select>
                </div>
            
                                    <div class="form-group">
                                        <label for="r_desc" class="col-md-12">Research Descriptions</label>
                                        <div class="col-md-12">

                                        <textarea name="r_desc" id="r_desc" cols="70" rows="10"></textarea>
                                          
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pic_main" class="col-md-12">Research Main Profile</label>
                                        <div class="col-md-12">
                                            <input type="file" 
                                                name="pic_main"
                                                id="pic_main" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pic_subone" class="col-md-12">Research Sub Profile 1</label>
                                        <div class="col-md-12">
                                            <input type="file" 
                                                name="pic_subone"
                                                id="pic_subone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pic_subtwo" class="col-md-12">Research Sub Profile 2</label>
                                        <div class="col-md-12">
                                            <input type="file" 
                                                 name="pic_subtwo"
                                                id="pic_subtwo">
                                        </div>
                                    </div>
                                   
                                    
                                   
                                  
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Upload Research</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                

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