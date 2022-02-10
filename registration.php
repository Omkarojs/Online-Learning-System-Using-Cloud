
<?php include('regcheck.php') ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        body:before{

            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh; 
            background-color:lightgray;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
           
        }
        .login-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-bottom: 150px;
            margin-top:10px;
            transform: translate(-50%,-50%);
            width: 700px;
            height: auto;
            padding: 10px 40px;
            box-sizing: border-box;
            background: rgba(255, 255, 255);
            border-radius:25px;
        }
        .login-form h2 {
            margin: 0;
            padding: 20px 0 35px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .login-form p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #000;
        }
        .login-form input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #000;
            background: transparent;
            outline: none;
            height: 40px;
            color: #000;
            font-size: 16px;
        }
        .login-form input[type="submit"]
        {
            height: 30px;
            width:100px;
            align:center;
            color: #fff;
            font-size: 15px;
            background: blue;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: 0%;
        }
        .login-form select{
            border: none;
            border-bottom: 1px solid #000;
            background: transparent;
            outline: none;
            height: 40px;
            width:100%;
            color: #000;
            font-size: 16px;
        }
        .login-form a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        input[type="checkbox"] {
            width: 20%;
        }

        .block{
            display:block;
            width:39%;
            height:50px;
            border:none;
            background-color:#009efb;
            color:#fff;
            padding:8px 20px;
            font-size:19px;
            cursor:pointer;
            text-align:center;
            margin:10px;
            margin-left:30%;
            border-radius: 25px;
        
        }
        
        i{
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}
.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}
.GFG { 
            background-color: Red; 
            border: 1px solid black; 
            color: green; 
            padding: 5px 08px; 
            text-align: center; 
            display: inline-block; 
            font-size: 13px;  
            cursor: pointer; 
            text-decoration:none; 
            border-radius: 25px;
            margin-left:05%;
            }
            .error{
         
        margin-bottom:5px;
    }
    .error p {
        width: 100%; 
        margin: -5px auto; 
        padding: 0px; 
        color: #ff571a; 
        background: transparent; 
        border-radius: 5px; 
        text-align: left;
    }

    </style>
</head>
<body>
<marquee direction="left" behavior="alternate"><h1><font color="red">*!! Important Please Note Down The User_Name And Password For Login Purpose !!*</font><h1></marquee>
    <div class="login-form">
        
        <h2><font color="#009efb">Registration Form<font></h2>

        <script>
        function myfun(){
            var a = document.getElementById("pass1").value;
            var b = document.getElementById("pass2").value;
        
            if(a!=b)
            {
                document.getElementById("message").innerHTML="....Password Not Match";
                return false;
            }
        }
        </script>

<?php include "errors.php";?>
        <form method="post" action="" onsubmit="return myfun()">

               
        <input type="hidden" name="id" value="<?php echo $id; ?>" />       
            <p>User_Name</p>
            <input type="text" name="username" placeholder="Enter Name" autocomplete="off" required>
           <br>
      
            <p>Password</p>
            <input type="password" name="password" id="pass1" value="" placeholder="Enter Password" autocomplete="off" required>
             <span id="message"> </span>
            <p>Confirm Password</p>
            <input type="password" name="password1" id="pass2" value="" placeholder="Enter Same Password" autocomplete="off" required>
                      
            <br><br>
            </p> 
           
            <p>Enter User_Type</p>
            <select name="user_type" >
                <option value=""> Select</option>
                <option value="Admin">Admin</option>
            </select>    
            

            <br><br>
            <button class="block" name="reg_btn">Submit</button>

<br>
            <p>Already have an account ? <a href="login.php"><font size="4" color="blue">Login Here</font></a></p>
                       
            
        </form>
    </div><br><br><br><br><br>
 
</body>
</html>
<?php //include 'footer.php'; ?>