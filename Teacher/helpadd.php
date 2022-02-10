
<?php include '../connection/connection.php';
if(isset($_POST['save']))
{   
    $id=$_POST['id'];	
    $username  = $_POST['username'];
    $question  = $_POST['question'];
    $useremail  = $_POST['useremail'];
    $date  = $_POST['date'];

    if($id == 0) 
    {
    $que = "INSERT INTO help (username ,question,useremail,date,status) VALUES('" . $username  ."','" . $question  ."','" . $useremail  ."','" . $date ."','Unsolved')";
    $query = mysqli_query($conn,$que);


    }
    else
    { 
        $query = "UPDATE help  SET username  = '" . $username  . "',question  = '" . $question  . "',useremail  = '" . $useremail  . "',date = '" . $date . "' WHERE id = " . $id;
        mysqli_query($conn,$query);
    } 
}
echo "<script> location.href='help_d.php';</script>";
?>
 