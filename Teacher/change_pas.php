<?php 

session_start();
if(isset($_SESSION['username'])){
      //echo "Welcome: " . $_SESSION['token'];

      //echo " Your pass:".$_SESSION['pass'];
        }
        else 
        {
            echo "<script> location.href='../design1/sign-in.php';</script>"; 
        }
if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='../index.php';</script>";
}

$abc=$_SESSION['username'];
?>
<?php
include '../connection/connection.php';
?>
<?php include 'layout/aheader.php'; ?>
<?php include 'layout/asidebar.php'; ?>
<?php include 'layout/afooter.php'; ?>

<html>
<head>

<style>
.profilepress-reset-status {
  width: 400px;
  text-align: center;
  background-color: #e74c3c;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

.memo-reset-success {
   width: 400px;
  text-align: center;
  background-color: #2ecc71;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

#sc-password {
  background: #f0f0f0;
  width: 400px;
  margin: 0 auto;
  margin-top: 08%;
  margin-bottom: 2%;
  transition: opacity 1s;
  -webkit-transition: opacity 1s;
}

#sc-password h1 {
  background: #3399cc;
  padding: 20px 0;
  font-size: 140%;
  font-weight: 300;
  text-align: center;
  color: #fff;
}

div#sc-password .sc-container {
  background: #f0f0f0;
  padding: 6% 4%;
}

div#sc-password input[type="email"],
div#sc-password input[type="text"],
div#sc-password input[type="password"] {
  width: 92%;
  background: #fff;
  margin-bottom: 4%;
  border: 1px solid #ccc;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 95%;
  color: #555;
}

div#sc-password input[type="submit"] {
  width: 100%;
  background: #3399cc;
  border: 0;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 100%;
  color: #fff;
  cursor: pointer;
  transition: background .3s;
  -webkit-transition: background .3s;
}

div#sc-password input[type="submit"]:hover {
  background: #2288bb;
}

    </style>
 
    </head>
    <body>
        <form action="" method="Post">
<div id="sc-password">
  <h1>Change Password</h1>
  <div class="sc-container">
    <lable>Old Password</lable>
    <input type="password" name="oldpass" placeholder="Enter Old Password"/>
    <lable>New Password</lable>
    <input type="password" name="newpass" placeholder="Enter New Password"/>
    <lable>Confirm new Password</lable>
    <input type="password" name="pass2" placeholder="Confirm Password"/>
    
    <input type="submit" name="submit" value="Save" />
    <br><br>
   
   
  </div>
</div>
</form>
</body>
</html>
 
<?php

//echo "connected success";
if(isset($_POST['submit'])){
$old=$_POST['oldpass'];
$new=$_POST['newpass'];
$confirm=$_POST['pass2'];

$query="SELECT password from login WHERE username='$abc'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{
    $pass=$row['password'];
    if($pass==$old)
    {
        if($new==$confirm)
        {
            $que="UPDATE login SET password='$confirm' WHERE username='$abc'";
            $update=mysqli_query($conn,$que);

            if($update){
                echo "<script>alert('Success')</script>";
                echo "<script> location.href='dashboard.php';</script>";
            }else{
                echo "<script>alert('New and confirm password do not match')</script>"; 
            }

        }else{
            echo "<script>alert('New and confirm password do not match')</script>";
        }
    }else{
        echo "<script>alert('Old password do not match')</script>";
    }
}

}
//$query="UPDATE studreg SET password='$new' WHERE token=$abc";
//mysqli_query($conn,$query);
   //echo $query; 


?>