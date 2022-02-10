
<?php include '../connection/connection.php';
if(isset($_POST['save']))
{   
    $id=$_POST['id'];	
    $category  = $_POST['category'];
    $sub_category  = $_POST['sub_category'];
    $year  = $_POST['year'];
    $semister  = $_POST['semister'];
 
    $date = $_POST['date'];

    if($id == 0) 
    {
    $que = "INSERT INTO category (category, sub_category,year,semister, date) VALUES('" . $category  ."','" . $sub_category  ."','" . $year  ."','" . $semister ."','" . $date ."')";
    $query = mysqli_query($conn,$que);
    }
    else
    {
        $query = "UPDATE category  SET category  = '" . $category  . "',sub_category = '" . $sub_category  . "',year = '" . $year  . "',semister= '" . $semister . "',date = '" . $date . "' WHERE id = " . $id;
        mysqli_query($conn,$query);
    } 
}
echo "<script> location.href='category_d.php';</script>";
?>
