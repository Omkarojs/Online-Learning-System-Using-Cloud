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
                    <div class="row d-lg-none">
                      <div class="col-md-12">
                      <?php
                         $query = "SELECT DISTINCT category from category  ORDER BY id";
                         $result = mysqli_query($conn,$query);
                         
                         while($row = mysqli_fetch_array($result))
                         { 
                            { 
                              $category=$row['category'];
                              ?> 

                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-app text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <div>
                              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0"><?php  echo $category; ?></h6>
                            </div>
                          </div>
                          
                        </div>
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
                        <?php
                        }
                        }
                        ?>
                      </div>
                    </div>
                  </ul>
                </li>
            

                
    <style>
        .search input[type=text]{
        width:300px;
        height:25px;
        /*border-radius:25px;*/
        border: none;
    }
          
    .search{
        float:right;
        margin:7px;
    }
          
    .search button{
        background-color: #0074D9;
        color: #f2f2f2;
        float: right;
        border: none;
        height:24px;
        cursor: pointer;
    } 
            </style>


                <li class="nav-item">
                <div class="search">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text"
                    placeholder="Search Courses"
                    name="search1">
                <button name="search">
                    <i class="fa fa-search"
                        style="font-size: 18px;">
                    </i>
                </button>
            </form>
        </div>
                </li>
             <!--   
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
-->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                    <b>Registration</b>
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
                              </div>
                            </div>
                          </div>
                        </a>
                        
                      </li>
                    </div>


                    <div class="row d-lg-none">
                      <div class="col-md-12">
                        <div class="d-flex mb-2">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <div>
                                <a  href="sign-up.php">
                              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Student Registration</h6>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-laptop text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <div>
                                <a href="teacher_sign_up.php">
                              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Teacher Registration</h6>
                                </a>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
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