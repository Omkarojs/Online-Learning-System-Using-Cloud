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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- FontAwesome 5 -->
    
    <style>
        /* Import Font Dancing Script */
/*@import url(https://fonts.googleapis.com/css?family=Dancing+Script);*/



/* NavbarTop */

/* End */

/* Main */
.main {
    margin-top: 80px;
    margin-left: 29%;
    font-size: 28px;

    width: 58%;
}

.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

.social-media {
    text-align: center;
    width: 90%;
}

.social-media span {
    margin: 0 10px;
}

.fa-facebook:hover {
    color: #4267b3 !important;
}

.fa-twitter:hover {
    color: #1da1f2 !important;
}

.fa-instagram:hover {
    color: #ce2b94 !important;
}

.fa-invision:hover {
    color: #f83263 !important;
}

.fa-github:hover {
    color: #161414 !important;
}

.fa-whatsapp:hover {
    color: #25d366 !important;
}

.fa-snapchat:hover {
    color: #fffb01 !important;
}

/* End */
        </style>
</head>
<body>
<?php
                         
$query = "SELECT * from teacher where email='$abc' ORDER BY id";
$result = mysqli_query($conn,$query);
                         
$row = mysqli_fetch_array($result);
                         
                            ?> 


    <!-- Sidenav -->
    
    <!-- Main -->
    <div class="main">
        <h2>Teacher Profile</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $row['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Teacher Id</td>
                            <td>:</td>
                            <td><?php echo $row['t_id']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $row['address']; ?></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>:</td>
                            <td><?php echo $row['mobile']; ?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td><?php echo $row['age']; ?></td>
                        </tr>
                        <tr>
                            <td>Qualification</td>
                            <td>:</td>
                            <td><?php echo $row['qualification']; ?></td>
                        </tr>
                        <tr>
                            <td>Adhaar Number</td>
                            <td>:</td>
                            <td><?php echo $row['adhar']; ?></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>:</td>
                            <td><?php echo $row['category']; ?></td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td>:</td>
                            <td><?php echo $row['subject']; ?></td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td>:</td>
                            <td><?php echo $row['year']; ?></td>
                        </tr>
                        <tr>
                            <td>Semister</td>
                            <td>:</td>
                            <td><?php echo $row['semister']; ?></td>
                        </tr>
                      
                        
                        <tr>
                            <td>Date</td>
                            <td>:</td>
                            <td><?php echo $row['date']; ?></td>
                        </tr>

                        <tr>
                            <td>Salary Slip</td>
                            <td>:</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                            <td><?php echo "<img src=../salaryslip/" . $row['image'] ." height='180px' width='280px'>" ; ?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

         <!-- End -->
</body>
</html>
<br><br>
<?php include 'layout/afooter.php'; ?>