
<?php include '../connection/connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Education</title>
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
                        <form action="send.php"   method="post" class="form-signin">
                    
                        
                        <div class="form-group">
                            <label>Query</label>
                            <?php
                            $id = $_GET['id'];
                            $q="SELECT * FROM chat WHERE id= ".$id;
                            $result = mysqli_query($conn,$q);
                            $row = mysqli_fetch_assoc($result);
                            $query=$row['query'];
                            ?>
                            <input type="text"  name="query" autofocus="" value="<?php echo $query; ?>" class="form-control" autocomplete="off" >
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <input type="text" name="answer" autocomplete="off" class="form-control">
                        </div>
                        
                        <div class="form-group text-center">
                            <button  type="submit" name="submit" class="btn btn-primary account-btn">Send</button>
                        </div>

                        
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
    
</body>

</html>
<?php include 'footer.php';?>
