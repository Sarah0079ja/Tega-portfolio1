<?php
//variable setting
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$subject=$_SERVER['message'];

//check input fields
if (empty($name) || empty($email) || empty($subject) || empty($message)) 
{
  echo "Please fill all fields"
}
else{
  mail("detegaa@gmail.com", "Portfolio enquiry", $message, "From: $name <
  $email>");
  echo "<script type='text/javascript'>alert('message delivered successfully');
  window.history.log(-1);
  </script>";
}
?>
