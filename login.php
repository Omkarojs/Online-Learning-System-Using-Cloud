
<?php include('regcheck.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
</head>
<style>
img{
    margin-left:90px;
}
@media screen and (max-width: 364px) {
    img{
    margin-left:50px;
}
}@media screen and (max-width: 320px) {
    img{
    margin-left:30px;
}
}
@media screen and (max-width: 280px) {
    img{
    margin-left:12px;
}
}
.button{ 
        background-color:  #009ce7;
        border: 1px solid black; 
        color: black; 
        padding: 5px 08px; 
        text-align: center; 
        display: inline-block; 
        font-size: 10px;  
        cursor: pointer; 
        text-decoration:none; 
        border-radius: 25px;
        margin-left:3%;
        }

    body{
        background:lightgray;
    }
    .GFG { 
            background-color: #009ce7; 
            border: 1px; 
            color: green; 
            padding: 5px 08px; 
            text-align: center; 
            display: inline-block; 
            font-size: 13px;  
            cursor: pointer; 
            text-decoration:none; 
            border-radius: 25px;
            margin-left:4%;
            }
        .account-box{
            border-radius:25px;
        }
</style>
<body>
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
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box" >
                        <form action=""   method="post" class="form-signin">
                        <img src="assets/img/Login.png" height="150" width="150">
                        <?php include 'errors.php';?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text"  name="username" autofocus="" class="form-control" autocomplete="off" >
                        
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" autocomplete="off" class="form-control">
                        </div>
                        
                        <div class="form-group text-center">
                            <button  type="submit" name="login_btn" class="btn btn-primary account-btn">Login</button>
                        </div>

                        
                        <div class="form-group text-center">
                        <a href="registration.php"class="GFG"><font size="4" color="white">Sign Up</font> </a>
                        </div>

                        <span class="psw"><font size="4" color="black">Forgot </font> <a href="forgot.php"><font size="4" color="blue">password?</font></a></span>
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
    
</body>

</html>
<?php include 'footer.php';?>
