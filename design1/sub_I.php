<!DOCTYPE html>
<html lang="en">
<?php 
include '../connection/connection.php';
?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Education
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" >
              E-Learning
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover w-100">
               
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                    <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                    <div class="d-none d-lg-block">
                    <?php
                         $query = "SELECT DISTINCT category from category  ORDER BY id";
                         $result = mysqli_query($conn,$query);
                         
                         while($row = mysqli_fetch_array($result))
                         { 
                            { 
                              $category=$row['category'];
                              ?> 
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-app text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                              
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"><?php  echo $category; ?></h6>
                                <span class="text-sm"></span>
                              </div>
                              <img src="./assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                      
                          
                        </a>
                       
                    
                        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                        <?php
                         $query1 = "SELECT * from category Where category='$category'";
                         $result1 = mysqli_query($conn,$query1);
                         
                         while($row1 = mysqli_fetch_array($result1))
                         { 
                            {?> 
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="sub_I.php?id=<?php echo $row1['sub_category']; ?>&mode=edit">
                          <?php  echo $row1['sub_category']; ?>
                          </a>
                          <?php 
                          }
                        }?>
                        </div>
                       
                      </li>
                      <?php 
                          }
                        }?>
   

                    </div>
                    
                  </ul>
                </li>

                
                <li class="nav-item ms-lg-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                   <b> Registration</b>
                    <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                    <div class="d-none d-lg-block">
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="sign-up.php">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Student Registration</h6>
                                <span class="text-sm"></span>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="teacher_sign_up.php">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-laptop text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Teacher Registration</h6>
                                <span class="text-sm"></span>
                              </div>
                            </div>
                          </div>
                        </a>
                        </ul>
                      </li>

                      
               
                <li class="nav-item my-auto ms-3 ms-lg-0">
                  <a href="sign-in.php" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>


  <header class="header-2">
    <div class="page-header min-vh-75" style="background-image: url('./assets/img/curved-images/curved.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">E-Learning System</h1>
            <p class="lead text-white mt-3">Expand your career opportunities. <br /> Transform your life through education. </p>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
          </g>
        </svg>
      </div>
    </div>
  </header>
      
    <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="row text-center my-sm-5 mt-5">
          <div class="col-lg-6 mx-auto">
            <h2 class="text-primary text-gradient mb-0">Videos</h2>

          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="row mt-4">
            
      <?php 
           $id = $_GET['id'];   
		 $sql = "SELECT * FROM video Where subject='$id' AND series='1' AND status='Active'  ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
        $subject=$video['subject'];
        $series=$video['series'];
		 ?>
          <div class="col-md-4">
              <a href="">
                <div class="card move-on-hover">
    
                <video src="../video/<?=$video['video_url']?>"  
	        	   controls >
             
      
              </div>
                <div class="mt-2 ms-2">
                  <?php echo "<b>".$subject."&nbsp;&nbsp;" .$series."</b>";?>
                  <a href="sign-up.php" style="float:right;color:#0074D9;">For Any Query Click Here</a>
                </div>
              </a>
            </div>
            <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>

           
            
          </div>
        </div>
        
      </div>
  </section>
  <!-- -------- START Content Presentation Docs ------- -->
    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <?php include "footer.php"; ?>
