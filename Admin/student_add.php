
<?php include '../connection/connection.php';
if(isset($_POST['save']))
{   
    $id=$_POST['id'];	
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $semister = $_POST['semister'];
    $password = $_POST['password'];
    $date = $_POST['date'];


    if($id == 0) 
    {
    $que = "INSERT INTO student (name,email,mobile ,category,year_1,semister,password,date) VALUES('" . $name  ."','" . $email  ."','" . $mobile  ."','" . $category ."','" . $year  ."','" . $semister  ."','" . $password ."','" . $date ."')";
    $query = mysqli_query($conn,$que);

    $query1 = "INSERT INTO login(username, password, user_type) 
    VALUES('".$email."','".$password."','Student')";
    mysqli_query($conn, $query1); 
    }
    else
    {
        $query = "UPDATE student  SET name  = '" . $name  . "',email  = '" . $email  . "', mobile  = '" . $mobile . "',category = '" . $category . "',year_1 = '" . $year . "',semister  = '" . $semister  . "',date = '" . $date . "',password = '" . $password . "' WHERE id = " . $id;
        mysqli_query($conn,$query);
    }
}
echo "<script> location.href='student_d.php';</script>";
?>
 