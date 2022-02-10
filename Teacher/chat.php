
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';
?>


<style> 

</style>

<?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo '<script>alert("Email Sent Successfully")</script>';
        }
    }
    ?>
<div class="page-wrapper">
<div class="content">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="page-title">Student Queries</h4>
        </div>
        <div class="col-sm-6 col-9 text-right m-b-20">
                    
                  </div>
        <div class="col-sm-4">
            <input type="text" value="" id="search" name="search" onkeyup="mySearch()" autofocus
            class="form-control pull-right" autocomplete="off" placeholder="Search_By_Name...">
        </div>
        <div class="col-sm-4">
            <input type="text" value="" id="search1" name="search1" onkeyup="mySearch1()" 
            class="form-control pull-right" autocomplete="off" placeholder="Search_By_Mobile_Number...">
        </div>
    </div><br />
<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table" id="myTable">
                    <thead>
                        <tr>                            
                            <th>Sr.No</th>
                        
                            <th>Email</th>
                            <th>Video</th>
                            <th>Query</th>
                            <th>course category </th>
                            <th>Year</th>
                            <th>Semister</th>
                            <th>Subject</th>
                            <th>Series</th>
                         
                            <th>Date</th>
                            <th>Status</th>
                            <th>Send Answer</th>

                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $query = "SELECT * from chat  ORDER BY id";
                         $result = mysqli_query($conn,$query);
                         $count = 1;
                         while($row = mysqli_fetch_array($result))
                         { 
                            {?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['user']; ?></td>
                            <td><video src="../video/<?=$row['video']?>"  
	        	   controls height="100" width="150"></td>
                            <td><?php echo $row['query']; ?></td>
                           
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['year']; ?></td>
                            <td><?php echo $row['semister']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['series']; ?></td>
                            
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><a href="chat1.php?id=<?php echo $row['id'] ?>"
                                        title="click to edit">
                                            Answer
                                        
                                </a></td>
                           <td class="text-center" style="width:100px;">
                           <?php 
                                            if($row['status']==='Solved')
                                        {?>
                           &nbsp;&nbsp;
                           <a onclick="return confirm(\'Sure to delete?');" href="student.php?id=<?php echo $row['id'] ?>&Mode=delete"
                                        title="click to delete"><i class="material-icons" style="color:red"
                                        >
                                            delete
                                        </i>
                            </a>
                            <?php 
                                        }?>
                            </td>
                        </tr>
                        <?php 
                       
                       $count++;	
                    }
}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
<script>
function mySearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mySearch1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php include 'layout/afooter.php'; ?>
