<?php 	include '../connection/connection.php';
if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$category=$_POST['category'];
	$subject=$_POST['subject'];
	$series=$_POST['series'];
	$year=$_POST['year'];
	$semister=$_POST['semister'];
	$date=$_POST['date'];
if (isset($_FILES['my_video'])) {

    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];


    if ($error === 0) {
    	$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

    	$video_ex_lc = strtolower($video_ex);

    	$allowed_exs = array("mp4", 'webm', 'avi', 'flv','mkv');

    	if (in_array($video_ex_lc, $allowed_exs)) {
    		
    		$new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
    		$video_upload_path = '../video/'.$new_video_name;
    		move_uploaded_file($tmp_name, $video_upload_path);
			
			if($id == 0) 
			{
    		// Now let's Insert the video path into database
            $sql = "INSERT INTO video(video_url,category,subject,series,year,semister,date,status) 
                   VALUES('".$new_video_name."','".$category."','".$subject."','".$series."','".$year."','".$semister."','".$date."','Inactive')";
            mysqli_query($conn, $sql);
            
			}
			else{
				$query = "UPDATE video SET video_url = '" . $new_video_name . "',category = '" . $category . "',subject = '" . $subject . "',series = '" . $series . "',year = '" . $year . "',semister = '" . $semister . "',date = '" . $date . "' WHERE id = " . $id;
				mysqli_query($conn,$query);
			}
			echo "<script> location.href='viewvideo.php';</script>";
	}else {
    		$em = "You can't upload files of this type";
			echo "<script> location.href='student_d.php'?error=$em;</script>";
    		
    	}
    }


}else{
	echo "<script> location.href='video.php';</script>";
}
}