<?PHP

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = $_POST['host'];
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->Port = $_POST['port'];
$mail->From = 'auto-message@icvex.com';
$mail->FromName = 'Auto Message';

$mail->addAddress($_POST['to']);

$mail->isHTML(true);

$mail->Subject = 'Email Flow Testing';

// $n = "\r\n\r\n";
$n = "<br>";
$message = "Auto Plus - email testing";
$message .= $n."new line testing";
$message .= $n."กขค ทดสอบภาษาไทย";

$mail->Body    = $message;

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else{
	echo 'successful';
}

?>