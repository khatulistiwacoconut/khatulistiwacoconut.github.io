<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to=$email;

$message="From:$fname <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <contact@theborneococo.com>' . "\r\n";
$headers .= 'Cc: irvansikajudin@theborneo.com' . "\r\n";
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>