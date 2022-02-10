
<?php include 'layout/aheader.php';
include 'layout/asidebar.php';
include '../connection/connection.php';
?>

<style>

     
</style>


<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="page-title">Videos</h4>
            </div>
			<div class="col-sm-6 col-9 text-right m-b-20">
                                            <br>
                    </div>

        
        </div><br />
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table" id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>video</th>
                                <th>Subject Series</th>
                                <th>Year</th>
                                <th>Semister</th>
                                <th>Date</th>
                                <th>Status</th>

								<th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
          
                        <?php
                         $query = "SELECT * from video order by date desc ";
                         $result = mysqli_query($conn,$query);
                         $count = 1;

                         while($row = mysqli_fetch_array($result))
                         { 
                             $id=$row['id'];
                             $i=1;
                            ?>
                            <tr>
                                
                                <td class="text-center"><?php echo $count ?></td>
                               
                                <td><video src="../video/<?=$row['video_url']?>"  
	        	   controls height="100" width="150"></td>
                                <td><?php echo " ". $row['subject'] ."". $row['series'] ." "; ?></td>
                                <td><?php echo " ". $row['year'] ." "; ?></td>
                                <td><?php echo " ". $row['semister'] ." "; ?></td>
                                <td><?php echo " ". $row['date'] ." "; ?></td>
                                <td>    <?php echo "<a href='edit.php?id=" . $row['id'] . "&Mode=edit'>". $row['status'] ."</a>";?>
                                </td>
         
                               <td class="text-center" style="width:100px;">
  
                               &nbsp;&nbsp;
                           <?php echo "<a onclick='return confirm(\"Sure to delete?\");' href='edit.php?id=" . $row['id'] . "&Mode=delete'>Delete</a>";?>  
                                </td>
                            </tr>
                            <?php 
                       
                       $count++;	
                    }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/afooter.php'; ?>
