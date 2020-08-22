<?php



if(isset($_POST['submit'])){

$name= $_POST['name'];
$companyname= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$c_message= $_POST['message'];

$to = "keyurjasani42@gmail.com";
$subject = "Enquiry";
$message = "
<html>
<head>
</head>
<body>
<table border='1'>
<tr><th>Name</th><td>$name</td></tr>
<tr><th>companyName</th><td>$companyname</td></tr>
<tr><th>Email id</th><td>$email</td></tr>
<tr><th>Phone No.</th><td>$phone</td></tr>
<tr><th>Message</th><td>$c_message</td></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <keyurjasani41@gmail>' . "\r\n";
$headers .= 'Cc: keyurjasani41@gmail' . "\r\n"; // not required

$m = mail($to,$subject,$message,$headers);

header("location:index.html");

}
?>