
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';

?>
<?php
	$id= 0;
	$name  = "";
    $age  = "";
    $address  = "";
    $email = "";
    $mobile = "";
    $qualification  = "";
    $t_id = "";
    $adhar  = "";
    $category = "";
    $subject = "";
    $year  = "";
    $semister  = "";
    $date = "";

if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['Mode'] == "edit")
		{
			$query = "SELECT * FROM teacher WHERE id = " . $id;
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
            $id  = $row['id'];
			$name  = $row['name'];
            $age  = $row['age'];
            $address  = $row['address'];
            $email  = $row['email'];
            $mobile = $row['mobile'];
            $qualification  = $row['qualification'];
            $t_id  = $row['t_id'];
            $adhar  = $row['adhar'];
            $category  = $row['category'];
            $subject = $row['subject'];
            $year  = $row['year'];
            $semister  = $row['semister'];
            $date = $row['date'];
		}
		else
		{
			$query = "DELETE FROM teacher  WHERE id = " . $id;
			mysqli_query($conn,$query);
            echo "<script>window.location.href='teacher_d.php';</script>";
			
		}
        
	}
?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Teacher Add</h4>
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
            <form action="teacher_add.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Teacher Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <input class="form-control" name=name autocomplete="off"
                                        value="<?php echo $name; ?>" placeholder="Enter The Name" type="text" required>
                                                              
                              </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Age <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=age autocomplete="off"
                                        value="<?php echo $age; ?>" placeholder="Enter The Age" type="text" maxlength="10" onkeypress="isInputNumber(event)" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Address <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=address autocomplete="off"
                                        value="<?php echo $address; ?>" placeholder="Enter The Address" type="text"  required>
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
                                <label>Mobile <span class="text-danger">*</span></label>
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
                                <label>Qualification<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name="qualification" 
                                        value="<?php echo $qualification; ?>" type="text" Placeholder="Please Enter The Qualification " required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Teacher ID<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=t_id autocomplete="off"
                                        value="<?php echo $t_id; ?>" placeholder="Enter The Teacher ID" type="text" maxlength="10" onkeypress="isInputNumber(event)" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Adhar <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=adhar autocomplete="off"
                                        value="<?php echo $adhar; ?>" placeholder="Enter The adhar" type="text" onblur="verify();" maxlength="12" onkeypress="isInputNumber(event)" required>
                                        <span id="message"  style="color: #ff571a;font-size: 18px;font-weight: bold;"> </span>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
    // multiplication table
    const d = [
        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
        [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
        [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
        [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
        [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
        [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
        [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
        [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
        [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
    ]
  
    // permutation table
    const p = [
        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
        [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
        [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
        [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
        [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
        [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
        [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
    ]
  
    // validates Aadhar number received as string
    function validate(aadharNumber) {
        let c = 0
        let invertedArray = aadharNumber.split('').map(Number).reverse()
  
        invertedArray.forEach((val, i) => {
            c = d[c][p[(i % 8)][val]]
        })
  
        return (c === 0)
    }
  
    function verify() {
      var message = document.getElementById("message");
      var aadharNo = document.getElementById("exampleInputAadharCard").value;
      if(validate(aadharNo)) {
        message.innerHTML = 'Your Aadhar Number is valid<br><br>';
        return true;
              
      } else {
        message.innerHTML = 'Your Aadhar Number is not valid <br><br>';
        return false
  
              
      }
          
    }
    
      
    </script>
                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Category <span class="text-danger">*</span></label>
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
                                <label>subject<span class="text-danger">*</span></label>
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
                                <label>Salary Slip <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=file autocomplete="off"
                                        value="" placeholder="Enter The Mobile_No" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <label>Password <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <input class="form-control" name=password autocomplete="off"
                                        value="<?php echo $age; ?>" placeholder="Enter The Password" type="password" required>
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
                        <a href="kamgar_d.php" class="btn btn-primary submit-btn">Back</a>
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