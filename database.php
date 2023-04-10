
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send']))
{
    $to=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $mail = new PHPMailer(true);

    $mail->isSMTP();                                            
    $mail->Host       =  'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'amanbihal0009@gmail.com';                    
    $mail->Password   = 'tjjzvewdmsdshqsm';                    
    $mail->SMTPSecure = 'ssl';           
    $mail->Port       = 465;  


    $mail->setFrom('amanbihal0009@gmail.com');
      $mail->addAddress($to);    

    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    =  $message;
    

    if($mail->send())
    {
    echo 
    "<script>
    alert('sent successfully')
    document.location.href='index.php'
    </script>
   ";


}
else
{
    echo "<script>alert('the mail is not sent')
    document.location.href='index.php'
    </script>";

}
}

?>