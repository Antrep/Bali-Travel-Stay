<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Oops! Probeer het opnieuw!</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "0918998@hr.nl";
	$subject = "Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Bali Travel & Stay!";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Uw bericht is succesvol verzonden!</span>";
	}
}
?>


<?php
if(isset($_SESSION['id'])) {
?>
<headerhitlertest><a>
<blablabla><blalb/b/bla>
<?php
}
?>