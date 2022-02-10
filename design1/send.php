
<?php
require('../connection/connection.php');
?>
<?php
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
    $subject1  = $_POST['subject'];
    $year  = $_POST['year'];
    $semister  = $_POST['semister'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    
    $filename1 = $_FILES["file"]["name"]; 
    $tempname1 = $_FILES["file"]["tmp_name"];     
    $image=move_uploaded_file($tempname1,"../salaryslip/$filename1");
$body = 'Name:' . $name . '<br/>From Email:' . $email . '<br/>Password: ' . $password;

//$body = 'From:' . $name . '<br/>Subject:' . $subject . '<br/>From Email:' . $to . '<br/>Message: ' . $message;
$subject = "Thank you From: E-Learning Organization ";
sendMail("projectwebsite412@gmail.com", $subject, $body);

$to = $_POST['email'];
$message = "Dear User,<br/> $name <br/>Username:$email<br/>Password:$password";

sendMail($to, $subject, $message);

$query ="INSERT INTO teacher (name ,age,address,email,mobile ,qualification,t_id,adhar,category,subject,year,semister,image,password,date) VALUES('" . $name  ."','" . $age  ."','" . $address  ."','" . $email  ."','" . $mobile  ."','" . $qualification ."','" . $t_id  ."','" . $adhar  ."','" . $category ."','" . $subject1  ."','" . $year  ."','" . $semister  ."','".$filename1."','" . $password  ."','" . $date ."')";

//echo $query;
//exit;
mysqli_query($conn,$query);
$query1 ="INSERT INTO login (username,password,user_type) VALUES('" . $email  ."','" . $password  ."','Teacher')";
mysqli_query($conn,$query1);

echo "<script> location.href='sign-in.php';</script>";





function sendMail($to, $subject, $body)
{
    try {
        require_once __DIR__ . '/mailer/class.phpmailer.php';
        require_once __DIR__ . '/mailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = 'true';
        $mail->Username = 'projectwebsite412@gmail.com';
        $mail->Password = 'WebTech@#123';
        $mail->FromName = 'Company Name: E-Learning Organization';
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->msgHTML($body);
        $result = 'sent';
        if (!$mail->send()) {
            $result = 'failed ' . $mail->ErrorInfo;
        }

        return $result;
    } catch (Exception $ex) {
        return 'exception';
    }
}

?>