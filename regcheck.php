<?php 
session_start();
// initializing variables
$username="";
$user_type="";
$errors = array();
$success= array(); 
include "connection/connection.php";
// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'mauli');

// REGISTER USER
if (isset($_POST['reg_btn'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
  
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    if ( $password !==  $password1) {
      array_push($errors, "Password is not Match");
    }
    
  


    
  // first check the database to make sure 
  // a user does not already exist with the same username and/or adhar
  $user_check_query = "SELECT * FROM login WHERE username='$username' OR password='$password' ";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['password'] === $password) {
        array_push($errors, "Password already exists");
      }

  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//encrypt the password before saving in the database

  	$query = "INSERT INTO login(username, password, user_type) 
      VALUES('".$username."','".$password."','".$user_type."')";
  	mysqli_query($conn, $query); 
    
    echo 'Registration Successful!!!';
  	header('location: login.php');
  }
}

// ... 

if (isset($_POST['login_btn'])) {
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

        $query = "SELECT * FROM login WHERE username='$username' AND password='$password' LIMIT 1"; 
        $results = mysqli_query($conn, $query); 
         
        if (mysqli_num_rows($results) == 1) 
        {
          $logged_in_user= mysqli_fetch_assoc($results);
          //check user type
          if($logged_in_user['user_type']=='Admin')
          {
            
            $_SESSION['username'] = $_POST['username']; 
            $_SESSION['password'] = $_POST['password'];
             echo "<script>window.location.href='Admin/dashboard.php';</script>";
          }
          elseif($logged_in_user['user_type']=='Teacher')
          {
            
            $_SESSION['username'] = $_POST['username']; 
            $_SESSION['password'] = $_POST['password'];
             echo "<script>window.location.href='Teacher/dashboard.php';</script>";
          }
          elseif($logged_in_user['user_type']=='Student')
          {
            
            $_SESSION['username'] = $_POST['username']; 
            $_SESSION['password'] = $_POST['password'];
             echo "<script>window.location.href='Student/dashboard.php';</script>";
          }

        }
        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>






