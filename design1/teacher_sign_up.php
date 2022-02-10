
<!DOCTYPE html>
<html lang="en">
<?php 
include '../connection/connection.php';
?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Education
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="sign-in-illustration">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
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
              <ul class="navbar-nav navbar-nav-hover  w-100">
             


               
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
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Teacher REgistration</h6>
                                <span class="text-sm"></span>
                              </div>
                            </div>
                          </div>
                        </a>
                        </ul>
                      </li>

                <li class="nav-item my-auto ms-3 ms-lg-0">
                  <a href="sign-in.php" class="btn btn-sm  bg-gradient-dark  btn-round mb-0 me-1 mt-2 mt-md-0">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <section><br><br>
  <script> 
document.addEventListener('keydown', function (event) {
  if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
    var form = event.target.form;
    var index = Array.prototype.indexOf.call(form, event.target);
    form.elements[index + 1].focus();
    event.preventDefault();
  }
});
</script>
<script>
function isInputNumber(evt){
    var ch = String.fromCharCode(evt.which);
    if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
    }   
}
</script>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Staff Registration</h4>
                <p class="mb-0">Enter All Fields Are Manditory</p>
              </div>
              <div class="card-body">
                <form action="send.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                  <div class="mb-3">
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter Teacher Name" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required> 
                  </div>

                  <div class="mb-3">
                    <input type="text" name="age" class="form-control form-control-lg" placeholder="Enter Teacher Age" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                    <input type="text" name="address" class="form-control form-control-lg" placeholder="Enter Teacher Address" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                    <input type="text" name="mobile" class="form-control form-control-lg" maxlength="10" onkeypress="isInputNumber(event)" placeholder="Mobile Number" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                    <input type="text" name="qualification" class="form-control form-control-lg" placeholder="Enter Teacher Qualification" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                    <input type="text" name="t_id" class="form-control form-control-lg" placeholder="Enter Teacher Id" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                  </div>
                   Add Salary Slip:
                  <div class="mb-3">
                  <input class="form-control form-control-lg" name="file"
                                   Placeholder="Please Enter MRP" type="file" required>            
                  </div>

                  <div class="mb-3">
                    <input type="text" name="adhar" id="exampleInputAadharCard" onblur="verify();" class="form-control form-control-lg" placeholder="Enter Adhar_Card Number" maxlength="12" onkeypress="isInputNumber(event)" aria-label="Email" aria-describedby="email-addon" autocomplete="off" required>
                    <span id="message"  style="color: #ff571a;font-size: 18px;font-weight: bold;"> </span>
                  </div>

                  <script type="text/javascript">
    // multiplication table
    const d = [
        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
        [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
        [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
        [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
        [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
        [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
        [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
        [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
        [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
    ]
  
    // permutation table
    const p = [
        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
        [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
        [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
        [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
        [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
        [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
        [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
    ]
  
    // validates Aadhar number received as string
    function validate(aadharNumber) {
        let c = 0
        let invertedArray = aadharNumber.split('').map(Number).reverse()
  
        invertedArray.forEach((val, i) => {
            c = d[c][p[(i % 8)][val]]
        })
  
        return (c === 0)
    }
  
    function verify() {
      var message = document.getElementById("message");
      var aadharNo = document.getElementById("exampleInputAadharCard").value;
      if(validate(aadharNo)) {
        message.innerHTML = 'Your Aadhar Number is valid<br><br>';
        return true;
              
      } else {
        message.innerHTML = 'Your Aadhar Number is not valid <br><br>';
        return false
  
              
      }
          
    }
    
      
    </script>
                    <div class="mb-3">
                       <select id="kname"  name="category" autocomplete="off" class="form-control" required>
                                <option value="">Select Category</option>
                               
                                <?php 
                                $select = "SELECT Distinct category from category ";
                                $query = mysqli_query($conn,$select);
                                $num = mysqli_num_rows($query);

                                while($res = mysqli_fetch_array($query))
                                {
                                    
                                    echo "<option value='". $res['category'] ."'>" .$res['category'] ."</option>";
                                }
                                $category=$_POST['category'];
                                ?>
                                </select >
                    </div>

                  <div class="mb-3">
                  <select id="kname"  name="subject" autocomplete="off" class="form-control" required>
                                <option value="">Select Sub_Category</option>
                               
                                <?php 
                                $select = "SELECT * from category ";
                                $query = mysqli_query($conn,$select);
                                $num = mysqli_num_rows($query);

                                while($res = mysqli_fetch_array($query))
                                {
                                    
                                    echo "<option value='". $res['sub_category'] ."'>" .$res['sub_category'] ."</option>";
                                }
                                $sub_category=$_POST['sub_category'];
                                ?>
                                </select ></div>

                  
                    <div class="mb-3">
                    <input type="text" name="year" class="form-control form-control-lg" placeholder="Enter Year" aria-label="Password" aria-describedby="password-addon" autocomplete="off">
                  </div>

                  <div class="mb-3">
                       <select id="kname"  name="semister" autocomplete="off" class="form-control" required>
                                <option value="">Select Semister</option>
                               
                                <?php 
                                $select = "SELECT Distinct semister from category ";
                                $query = mysqli_query($conn,$select);
                                $num = mysqli_num_rows($query);

                                while($res = mysqli_fetch_array($query))
                                {
                                    
                                    echo "<option value='". $res['semister'] ."'>" .$res['semister'] ."</option>";
                                }
                                //$category=$_POST['category'];
                                ?>
                                </select >
                    </div>

                  <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="password-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                    <input type="password" name="password1" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Password" aria-describedby="password-addon" autocomplete="off" required>
                  </div>

                  <div class="mb-3">
                  <input type="date('l, jS \ F Y, g:i A ')" class="form-control"  value="<?php $time = date_default_timezone_set('Asia/Kolkata'); echo $today = date("l, jS \ F Y, g:i A");?>" name="date" required>
                  </div>

                  <div class="text-center">
                    <button name="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Do you have an account?
                  <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign In</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/illustrations/chat.png">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"E-Learning"</h4>
              <p class="text-white">Expand your career opportunities!!!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
</body>

</html>