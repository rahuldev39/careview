<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     
     $conn = mysqli_connect('localhost','ab77068_careview','careview','ab77068_careview');// database connection
     
     require 'PHPMailer/PHPMailerAutoload.php';  //phpmailer required
     
     //get post data form form
    if(isset($_POST['name'])
    && isset($_POST['message']) && isset($_POST['email']) 
    && isset($_POST['phone_number']) && !empty($_POST['msg_subject'])){
    
      $fullname = $_POST['name'];
	 $message = $_POST['message'];
	 $email = $_POST['email'];
	 $mobilenumber = $_POST['phone_number'];
	 $msg_subject = $_POST['msg_subject'];
	 
	 $sql = "INSERT INTO partner(name,message,email,phone_number,msg_subject)
	 VALUES ('$fullname','$message','$email','$mobilenumber','$msg_subject')";
	 
	$result=mysqli_query($conn,$sql);
	//inbox message body
	$message = "<html>
    <head><meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
        <body>
       <h4>Partner With Us User Details.</h4>
       <p>You Receive this email from user as the userdetails are</p>
       <br>
       ".$_POST['name']."
       <br>
       ".$_POST['email']."
       <br>
       ".$_POST['msg_subject']."
       <br>
       ".$_POST['phone_number']."
       <br>
       ".$_POST['message']." 
      </body>
    </html>";
     //Message body ends   
//Create a new PHPMailer instance 
      $mail = new PHPMailer;
      $mail->IsSMTP();
    //   $mail->SMTPDebug = 3; 
    $mail->SMTPKeepAlive = true;   
$mail->Mailer = '“smtp”'; // don't change the quotes!
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'prernasinhabest93@gmail.com';
      $mail->Password = 'prernasinha@8';
      $mail->SMTPSecure = 'ssl';
      $mail->Port     = 465;
      $mail->setFrom('info@careview.in', 'Partner With Us');
      $mail->addAddress('info@careview.in', 'care');
      $mail->Subject = 'Partner With Us Query';
      $mail->isHTML(true);
      $mail->Body = $message;
if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;die;
    // return $mail->ErrorInfo;
} 
else {
    $msg="Your Query has been successfully submitted we will reach you soon";
   // header("location:contactus.php?msg=".$msg);
//   return 'success';
echo 'success';die;
}
}
?>