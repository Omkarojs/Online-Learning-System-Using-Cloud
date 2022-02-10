
<?php include '../connection/connection.php';
if(isset($_POST['save']))
{   
    $id=$_POST['id'];	
    $name  = $_POST['name'];
    $age  = $_POST['age'];
    $address  = $_POST['address'];
    $email  = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $qualification = $_POST['qualification'];
    $t_id  = $_POST['t_id'];
    $adhar  = $_POST['adhar'];
    $category = $_POST['category'];
    $subject  = $_POST['subject'];
    $year  = $_POST['year'];
    $semister  = $_POST['semister'];
    $password = $_POST['password'];
    $date = $_POST['date'];

    $filename1 = $_FILES["file"]["name"]; 
    $tempname1 = $_FILES["file"]["tmp_name"];     
    $image=move_uploaded_file($tempname1,"../salaryslip/$filename1");

    if($id == 0) 
    {
    $que = "INSERT INTO teacher (name ,age,address,email,mobile ,qualification,t_id,adhar,category,subject,year,semister,image,password,date) VALUES('" . $name  ."','" . $age  ."','" . $address  ."','" . $email  ."','" . $mobile  ."','" . $qualification ."','" . $t_id  ."','" . $adhar  ."','" . $category ."','" . $subject  ."','" . $year  ."','" . $semister  ."','".$filename1."','" . $password  ."','" . $date ."')";
    $query = mysqli_query($conn,$que);

    $query1 = "INSERT INTO login(username, password, user_type) 
    VALUES('".$email."','".$password."','Teacher')";
    mysqli_query($conn, $query1); 
    }
    else
    { 
        $query = "UPDATE teacher  SET name  = '" . $name  . "',age  = '" . $age  . "',address  = '" . $address . "',email  = '" . $email  . "', mobile  = '" . $mobile . "',qualification  = '" . $qualification  . "',t_id  = '" . $t_id . "',adhar = '" . $adhar  . "',category = '" . $category  . "',year  = '" . $year  . "',semister  = '" . $semister . "',subject = '" . $subject . "',password  = '" . $password  . "',date = '" . $date . "' WHERE id = " . $id;
        mysqli_query($conn,$query);
    } 
}
echo "<script> location.href='teacher_d.php';</script>";
?>
 