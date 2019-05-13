<?php
if(isset($_POST['Submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $company=$_POST['company'];
  $Howdidyouhearaboutus=$_POST['Howdidyouhearaboutus'];
  $message=$_POST['message'];

  $to='accounts@praaks.com';
  $subject='form submission';
  $message="name: ".$name."\n"."email: ".$email. "\n"."company: ".$company. "\n". "Howdidyouhearaboutus: ".$Howdidyouhearaboutus. "\n". "wrote following: "."\n\n".$message;
  $headers="From: ".$email;

  if(mail($to, $subject, $message, $headers)){
    echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";

  }
  else {
    echo"Something went wrong!";
  }
}
