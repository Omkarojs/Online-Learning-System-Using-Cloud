
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';
?>
<?php
	$id= "";
    $new_video_name = "";
    $subject="";
    $category="";
    $series="";
    $year="";
    $semister="";
    $date="";
if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['Mode'] == "edit")
		{
			$query = "SELECT * FROM video WHERE id = " . $id;
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
            $id=$row['id'];
            $new_video_name = $row['video_url'];
            $subject=$row['subject'];
            $category=$row['category'];
            $series=$row['series'];
            $year=$row['year'];
            $semister=$row['semister'];
            $date=$row['date'];
		}
		else
		{
			$query = "DELETE FROM video WHERE id = " . $id;
			mysqli_query($conn,$query);

            echo "<script>window.location.href='viewvideo.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		input {
			font-size: 2rem;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Add Videos</h4>
            </div>
        </div>
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
<script>
            function isInputNumber(evt){
                var ch = String.fromCharCode(evt.which);
                if(!(/[0-9]/.test(ch))){
                    evt.preventDefault();
                }   
            }
            
        </script>
	
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
    <div class="card-box">
	 <form action="addvideo.php"
	       method="post"
	       enctype="multipart/form-data">
           <div class="row">
               
           <input class="form-control" name="id" value="<?php echo $id; ?>"
                                    type="hidden" required>
           <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Select Video<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="my_video"
                                        value="<?php echo $new_video_name; ?>" Placeholder="" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Category<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                       <select id="kname"  name="category" autocomplete="off" class="form-control" required>
                                <option value="">Select Category</option>
                               
                                <?php 
                                $select = "SELECT Distinct category from category ";
                                $query = mysqli_query($conn,$select);
                                $num = mysqli_num_rows($query);

                                while($res = mysqli_fetch_array($query))
                                {
                                    
                                    echo "<option value='". $res['category'] ."'>" .$res['category'] ."</option>";
                                }
                                $category=$_POST['category'];
                                ?>
                                </select >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Subject<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                <select id="kname"  name="subject" autocomplete="off" class="form-control" required>
                                <option value="">Select Subject</option>
                               
                                <?php 
                                $select = "SELECT Distinct sub_category from category ";
                                $query = mysqli_query($conn,$select);
                                $num = mysqli_num_rows($query);

                                while($res = mysqli_fetch_array($query))
                                {
                                    
                                    echo "<option value='". $res['sub_category'] ."'>" .$res['sub_category'] ."</option>";
                                }
                                $category=$_POST['category'];
                                ?>
                                </select >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Series No.<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="series"
                                        value="<?php echo $series; ?>" Placeholder="Enter The Series" type="text" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Year<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="year" autocomplete="off"
                                        value="<?php echo $year; ?>"  type="text" placeholder="Enter The year" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Semister<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <select id="kname"  name="semister" autocomplete="off" class="form-control" required>
                                <option value="">Select Semister</option>
                               
                                <?php 
                                $select = "SELECT Distinct semister from category ";
                                $query = mysqli_query($conn,$select);
                                $num = mysqli_num_rows($query);

                                while($res = mysqli_fetch_array($query))
                                {
                                    
                                    echo "<option value='". $res['semister'] ."'>" .$res['semister'] ."</option>";
                                }
                                //$category=$_POST['category'];
                                ?>
                                </select >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Date <span class="text-danger">*</span></label>
                            </div>
                           <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="date" 
                                        value="<?php echo date("Y/m/d"); ?>" type="text" Placeholder="Please Enter The Date" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label><span class="text-danger"></span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
.btn{
    margin-left:500px;
}

@media screen and (max-width: 364px) {
  
  .btn{
    margin-left:80px;
  }
}
</style>
                   
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" name="submit" >Save</button>
                    </div>
    </div>
	 </form>
    </div>
</body>
</html>
<?php include 'layout/afooter.php'; ?>