<?php 

session_start();

        {
if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='../index.php';</script>";
}

$abc=$_SESSION['username'];
include '../connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo.ico">
    <title>Education</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
            <a href="dashboard.php"  class="logo">
            <?php    
            $s="SELECT * FROM teacher where email='$abc'";
            $result = mysqli_query($conn,$s);
            $row = mysqli_fetch_array($result);
            $abc1=$row['name'];
            ?>
                 <span><?php echo $abc1;?></span>
			</a>
            </div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                   
					
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                
            </div>
        </div>

<?php } ?>