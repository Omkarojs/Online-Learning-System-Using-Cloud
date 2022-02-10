
<?php include '../connection/connection.php';?>
<?php
$id=$_POST['id'];
$answer = $_POST['answer'];
$query = $_POST['query'];
$email = $_POST['email'];
$message_user = $_POST['message'];

$q="SELECT * FROM chat ";
$result = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($result);
//$query=$row['query'];
$user=$row['user'];
$subject=$row['subject'];

$body = 'Subject:' . $subject . '<br/>Query:' .$query . '<br/>From Email:' . $user ;

//$body = 'From:' . $name . '<br/>Subject:' . $subject . '<br/>From Email:' . $to . '<br/>Message: ' . $message;
sendMail("projectwebsite412@gmail.com", $subject, $body);

$to = $user;
$message = "Dear User,<br/> $user <br/>Query:$query<br/>Answer:$answer";
$subject = "Thank you From: E-Learning Organization  ";
sendMail($to, $subject, $message);


header('Location:chat.php?status=success');
$query = "UPDATE chat SET Status = 'Solved' WHERE Status = 'Unsolved' and id='$id'";;
mysqli_query($conn,$query);




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