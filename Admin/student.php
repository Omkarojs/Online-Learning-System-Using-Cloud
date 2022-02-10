
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';
?>
<?php
	$id= 0;
	$name  = "";
    $email = "";
    $mobile = "";
    $category = "";
    $year = "";
    $semister = "";
    $password = "";
    $date = "";

if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['Mode'] == "edit")
		{
			$query = "SELECT * FROM student  WHERE id = " . $id;
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
			$name  = $row['name'];
            $email  = $row['email'];
            $mobile = $row['mobile'];
            $adress  = $row['adress'];
            $category = $row['category'];
            $password = $row['password'];
            $date = $row['date'];
		}
		else
		{
			$query = "DELETE FROM student  WHERE id = " . $id;
			mysqli_query($conn,$query);
            echo "<script>window.location.href='student_d.php';</script>";
			
		}
        
	}
?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Student Add</h4>
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
        <div class="card-box">
            <form action="student_add.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Student Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <input class="form-control" name="name" 
                                        value="<?php echo $name; ?>" type="text" Placeholder="Please Enter The Name" required>                               
                              </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>email<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="email" 
                                        value="<?php echo $email; ?>" type="text" Placeholder="Please Enter The Email" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Mobile Number <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=mobile autocomplete="off"
                                        value="<?php echo $mobile; ?>" placeholder="Enter The Mobile_No" type="text" maxlength="10" onkeypress="isInputNumber(event)" required>
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
                                <label>year<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <input class="form-control" name="year" 
                                        value="<?php echo $year; ?>" type="text" Placeholder="Please Enter The Year " required>
                                
                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>semister<span class="text-danger">*</span></label>
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
                                <label>Password<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <input class="form-control" name="password" 
                                        value="<?php echo $password; ?>" type="password" Placeholder="Please Enter The Password " required>
                                
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

                    
                    
                    
<style>
.btn{
    margin-left:400px;
}

@media screen and (max-width: 364px) {
  
  .btn{
    margin-left:80px;
  }
}
</style>
                   
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" name="save">Save</button><br><br>
                        <a href="student_d.php" class="btn btn-primary submit-btn">Back</a>
                    </div>
            </form>
        </div>

    </div>
</div>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<?php include 'layout/afooter.php'; ?>