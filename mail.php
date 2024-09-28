<?php
//get data from date_create_from_format
$name = $_POST['name'];
$email=$_POST['email'];
$subjectperson=$_POST['subject'];
$message=$_POST['message'];


$to="adorableruthann@gmail.com";
$subject="Mail from Portfolio profile ".$subjectperson;
$txt="Name = ".$name."\r\n Email =".$email."\r\n Message =".$message;
$headers ="FROM Portfolio website"."\r\n ";
if($email!=NULL){
  mail($to,$subject,$txt,$headers);
}
//http_redirect
header("Location: thankyou.html");
