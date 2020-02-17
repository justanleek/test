<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile   = $_REQUEST["mobile"];
$mobile   = $_REQUEST["city"];
$msg   = $_REQUEST["msg"];
$to    = "justanleek@gmail.com";
if (isset($email) && isset($name) && isset($msg)) {
    $subject = "$name прислал заявку с лендинга по Патриоту";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "От ".$name." <".$email.">\r\n"."E-mail: ".$email."\r\n" ;
$msg     = "От $name<br/> E-mail: $email <br/> Телефон: $mobile <br/> Откуда: $city <br/>Message: $msg";

   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>
