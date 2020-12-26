<?php
include"database.php";

use PHPMailer\PHPMailer\PHPMailer;
USE PHPMailer\PHPMailer\EXCEPTION;
use PHPMailer\PHPMailer\SMTP;
require'phpmailer/vendor/autoload.php';
$mail = new PHPMailer(true);


if(isset($_POST['submit_email']) && $_POST['email'])
{

  $sql="select First_name,User_mail,User_password from useraccounts where User_mail='{$_POST["email"]}'";
  $res=$db->query($sql);
  if($res->num_rows==1)
  {
    while($rew=$res->fetch_assoc())
    {
      $Uname = $rew['First_name'];
      $email=$rew['User_mail'];
      $pass=$rew['User_password'];
    }

    
    
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'albenvaldez08151996@gmail.com';                     
    $mail->Password   = '';                              
    $mail->SMTPSecure = 'tls';        
    $mail->Port       = 587;                                    

  
    $mail->setFrom('albenvaldez08151996@gmail.com', 'albedo');
    $mail->addAddress($email);    

    

   
    $mail->isHTML(true);                                  
    $mail->Subject = 'FORGOT PASSWORD';
    $mail->Body    = "Hi $Uname your password is $pass";
    $mail->AltBody = "Hi $Uname your password is $pass";
    

    if($mail->Send())
    {
      echo "<script>window.open('EmailSent.php','_self');</script>";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }


  }	
  else
    {
      echo "Please enter a registered email address";
    }
}
?>