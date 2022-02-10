

<?php 
session_start();
// initializing variables
$id="";	
$name  = "";

$email  = "";
$mobile  = "";
$category  = "";
$year  = "";
$semister  = "";



$date ="";
$errors = array();
$success= array(); 
include "../connection/connection.php";
// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'mauli');

// REGISTER USER
if(isset($_POST['save'])) {
    // receive all input values from the form
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $semister = mysqli_real_escape_string($conn, $_POST['semister']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    if ( $password !==  $password1) {
      array_push($errors, "Password is not Match");
    }
 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or adhar
  $user_check_query = "SELECT * FROM login WHERE username='$email' OR password='$password' ";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if user exists
    if ($user['username'] == $email) {
      array_push($errors, "Username already exists");
    }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//encrypt the password before saving in the database
    if($id == 0) {
      $que = "INSERT INTO student (name,email,mobile,category,year_1,semister,password,date) VALUES('" . $name  ."','" . $email  ."','" . $mobile  ."','" . $category  ."','" . $year  ."','" . $semister ."','" . $password  ."','" . $date ."')";
      $query = mysqli_query($conn,$que);
  	$query = "INSERT INTO login(username, password, user_type) 
      VALUES('".$email."','".$password."','Student')";
  	mysqli_query($conn, $query); 
    }
    
    echo 'Registration Successful!!!';
    echo "<script> location.href='sign-in.php';</script>";
  }
}


?>



<?php
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if(count($errors)==0)
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        //$password=md5($password);

        $query = "SELECT * FROM login WHERE username='$username' AND password='$password'"; 
        $results = mysqli_query($conn, $query); 
         
        if (mysqli_num_rows($results) == 1) 
        {
          $logged_in_user= mysqli_fetch_assoc($results);
          //check user type
         
          if($logged_in_user['user_type']=='Teacher')
          {
            
            $_SESSION['username'] = $_POST['username']; 
            $_SESSION['password'] = $_POST['password'];
             echo "<script>window.location.href='../Teacher/dashboard.php';</script>";
          }
          elseif($logged_in_user['user_type']=='Student')
          {
            
            $_SESSION['username'] = $_POST['username']; 
            $_SESSION['password'] = $_POST['password'];
             echo "<script>window.location.href='student.php';</script>";
          }

        }
        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>

