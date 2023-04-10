<!-- fake mail sender generate through maitlrap -->



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['email']))
{

    $to=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
 mailer($to,$subject,$message);
}

function mailer($to,$subject,$msg){
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();                                            
        $mail->Host       =  'sandbox.smtp.mailtrap.io';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = '76de2c7430f65b';                    
        $mail->Password   = '6cfb18e2d49f60';                    
        // $mail->SMTPSecure = 'tls';           
        $mail->Port       = 2525;                                  
    
        //Recipients
        $mail->setFrom('pixelperfect@blog.com', 'Mailer');
        $mail->addAddress($to);    
        
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
        //Content

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    =  $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if($mail->send())
        {
            echo "the mail is sent";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/send_mail/index_2.php" method="post">
      Email:<br>
      <input type="email" name="email"><br>
      Subject:<br>
      <input type="text" name="subject"><br>
      Message:<br>
      <textarea rows="10" cols="50"name="message"></textarea><br>

     <input type="submit" name="send">
    </form>
</body>
</html>
