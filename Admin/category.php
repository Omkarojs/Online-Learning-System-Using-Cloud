
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';
?>
<?php
	$id= 0;
	$category  = "";
    $sub_category = "";
    $year="";
    $semister="";
    $date = "";

if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['Mode'] == "edit")
		{
			$query = "SELECT * FROM category WHERE id = " . $id;
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
			$category  = $row['category'];
            $sub_category  = $row['sub_category'];
         
            $date = $row['date'];
		}
		else
		{
			$query = "DELETE FROM category WHERE id = " . $id;
			mysqli_query($conn,$query);
            echo "<script>window.location.href='category_d.php';</script>";
			
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
            <form action="category_add.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                   

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Category<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="category" 
                                        value="<?php echo $category; ?>" type="text" Placeholder="Enter Categories" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Sub Categories<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="sub_category" 
                                        value="<?php echo $sub_category; ?>" type="text" Placeholder="Please Enter The Sub_Categories " required>
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

                                    <input class="form-control" name="year" 
                                        value="<?php echo $year; ?>" type="text" Placeholder="Enter Year" required>
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
                                <option value="I">I</option>
                                <option value="II">II</option>
                          
                               
                                </select ></div>
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

                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

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
                        <a href="category_d.php" class="btn btn-primary submit-btn">Back</a>
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