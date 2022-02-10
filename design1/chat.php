
<?php 
session_start();
if(isset($_SESSION['username'])){
      //echo "Welcome: " . $_SESSION['token'];

      //echo " Your pass:".$_SESSION['pass'];
        }
        else 
        {
            echo "<script> location.href='sign-in.php';</script>"; 
        }
if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='sign-in.php';</script>";
}
?>
<?php  include '../connection/connection.php';
   $user=$_SESSION['username'];
  // echo $user;
$id=$_GET['id'];
                         $query = "SELECT * from video where id='$id'  ";
                         $result = mysqli_query($conn,$query);
                         $row = mysqli_fetch_array($result);
                         $video= $row['video_url'];
                         $subject= $row['subject'];
                         $category=$row['category'];
                         $series=$row['series'];
                         $year=$row['year'];
                         $semister=$row['semister'];
                        /* echo "Id:-".$id."<br>" ;
                         echo "Video-name:-".$video."<br>";
                         echo "subject:-".$subject;
                         echo $category;*/
                        
                        
                            
                            
                                
                                
                       
                     
?>
   <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: blue;
  color: white;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  float:right;
  bottom: 23px;
  right: 0px;
  width: 150px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  
  bottom: 0;
  right: 0px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
 /* max-width: 300px;*/
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>


  <form action="chat.php" method="post" enctype="multipart/form-data" class="form-container">
    <h1>Ask Queries</h1>
    <input type="hidden" name="user" value="<?php echo $user; ?>" />
    <input type="hidden" name="video" value="<?php echo $video; ?>" />
    
    <label for="msg"><b>Queries</b></label>
    <textarea placeholder="Type Query.." name="query" required></textarea>
    <input type="hidden" name="category" value="<?php echo $category; ?>" />
    <input type="hidden" name="year" value="<?php echo $year; ?>" />
    <input type="hidden" name="semister" value="<?php echo $semister; ?>" />
    <input type="hidden" name="subject" value="<?php echo $subject; ?>" />
    <input type="hidden" name="series" value="<?php echo $series; ?>" />
    <input type="hidden" name="date" value="<?php $time = date_default_timezone_set('Asia/Kolkata'); echo $today = date("l, jS \ F Y, g:i A");?>" />
    
    <button type="submit" name="save" class="btn">Send</button>
    <a href="student.php"><button type="button" class="btn cancel" onclick="closeForm()">Back</button></a>
  </form>

  <?php
if(isset($_POST['save'])) {
    $user = $_POST['user'];
    $video = $_POST['video'];
    $query = $_POST['query'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $semister = $_POST['semister'];
    $subject = $_POST['subject'];
    $series = $_POST['series'];
    $date = $_POST['date'];



    	// Now let's Insert the video path into database
        $sql = "INSERT INTO chat(user,video,query,category,year,semister,subject,series,date,status) 
        VALUES('".$user."','".$video."','".$query."','".$category."','".$year."','".$semister."','".$subject."','".$series."','".$date."','Unsolved')";
 mysqli_query($conn, $sql);

 echo "<script> location.href='student.php';</script>";
}


  ?>