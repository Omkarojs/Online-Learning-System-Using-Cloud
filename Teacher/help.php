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
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';

?>
<?php
	$id= 0;
	$username  = "";
    $question  = "";
    $useremail = "";
 
    $date = "";

if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['Mode'] == "edit")
		{
			$query = "SELECT * FROM help WHERE id = " . $id;
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
            $id  = $row['id'];
			$username  = $row['username'];
            $question  = $row['question'];

            $useremail  = $row['useremail'];

            $date = $row['date'];
		}
		else
		{
			$query = "DELETE FROM help  WHERE id = " . $id;
			mysqli_query($conn,$query);
            echo "<script>window.location.href='help_d.php';</script>";
			
		}
        
	}
?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Help</h4>
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
            <form action="helpadd.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Teacher Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <input class="form-control" name=username autocomplete="off"
                                        value="<?php echo $username; ?>" placeholder="Enter The Name" type="text" required>
                                                              
                              </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Ask Question <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=question autocomplete="off"
                                        value="<?php echo $question; ?>" placeholder="Enter The Question" type="text"  required>
                                </div>
                            </div>
                        </div>
                    </div>



                                    <input class="form-control" name="useremail" 
                                        value="<?php echo $abc; ?>" type="hidden" >
                          

                    
                    
                   
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
                        <a href="help_d.php" class="btn btn-primary submit-btn">Back</a>
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