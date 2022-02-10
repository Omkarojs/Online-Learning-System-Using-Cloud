<?php 
include '../connection/connection.php';
?>
                                <?php 
                                if(isset($_GET['id']))
                                {
                                  $id = $_GET['id'];
                                  if($_GET['Mode'] == "edit")
                                  { 
                                    $q="SELECT * From video Where id='$id'";
                                    $res1=mysqli_query($conn,$q);
                                    $row=mysqli_fetch_array($res1);
                                    $status=$row['status'];
                                    if($status=='Inactive'){
                                    $sql="UPDATE video SET Status = 'Active' WHERE Status = 'Inactive' and id='$id'";
                                    $res=mysqli_query($conn,$sql);
                                    echo "<script> location.href='video.php';</script>";
                                    }
                                    if($status=='Active'){
                                    $sql="UPDATE video SET Status = 'Inactive' WHERE Status = 'Active' and id='$id'";
                                    $res=mysqli_query($conn,$sql);
                                    echo "<script> location.href='video.php';</script>";
                                    }
                                 }
                                 else
		{
			$query = "DELETE FROM video WHERE id = " . $id;
			mysqli_query($conn,$query);

            echo "<script>window.location.href='video.php';</script>";
		}
                                }
                                 else 
                                 echo "<script> location.href='dashboard.php';</script>";
                                ?>