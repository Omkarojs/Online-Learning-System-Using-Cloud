
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
                        <a href="video.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Video</a>
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
                                <th>Category</th>
                                <th>Subject</th>
                                <th>Series</th>
                                <th>Year</th>
                                <th>Semister</th>
                                <th>Date</th>

								<th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                         $query = "SELECT * from video order by date ";
                         $result = mysqli_query($conn,$query);
                         $count = 1;
                         while($row = mysqli_fetch_array($result))
                         { 
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $count ?></td>
                               
                                <td><?php echo " ". $row['video_url'] ." "; ?></td>
                                <td><?php echo " ". $row['category'] ." "; ?></td>
                                <td><?php echo " ". $row['subject'] ." "; ?></td>
                                <td><?php echo " ". $row['series'] ." "; ?></td>
                                <td><?php echo " ". $row['year'] ." "; ?></td>
                                <td><?php echo " ". $row['semister'] ." "; ?></td>
                                <td><?php echo " ". $row['date'] ." "; ?></td>
                            
                                
                                
                               <td class="text-center" style="width:100px;">
                               <?php echo "<a href='video.php?id=" . $row['id'] . "&Mode=edit'>Edit</a>";?>
                               &nbsp;&nbsp;
                           <?php echo "<a onclick='return confirm(\"Sure to delete?\");' href='video.php?id=" . $row['id'] . "&Mode=delete'>Delete</a>";?>  
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
