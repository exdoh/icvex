<?PHP

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = '203.150.225.184';
$mail->SMTPAuth = true;

$mail->Username = 'auto-message@icvex.com';
$mail->Password = 'Auto123@';

$mail->Port = '25';

// $mail->SMTPSecure = 'ssl'; // tls, ssl

$mail->From = 'auto-message@icvex.com';
$mail->FromName = 'Auto Message';

$mail->addAddress('info@icvex.com');   // Optional name

// $mail->addAddress('ellen@example.com');
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->WordWrap = 50;
// $mail->addAttachment('/var/tmp/file.tar.gz');
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);


$mail->Subject = 'Submitting the registration form of Business Forum on March 6';

// $n = "\r\n\r\n";
$n = "<br>";
$message = "Biz Forum";

$message .= $n.$n."<b>Company:</b> ".$_POST['company'];
$message .= $n."<b>Name:</b> ".$_POST['name'];
$message .= $n."<b>Position:</b> ".$_POST['position'];
$message .= $n."<b>Address:</b> ".$_POST['address'];
$message .= $n."<b>Tel:</b> ".$_POST['tel'];
$message .= $n."<b>Fax:</b> ".$_POST['fax'];
$message .= $n."<b>Mobile:</b> ".$_POST['mobile'];
$message .= $n."<b>Email:</b> ".$_POST['email'];
$message .= $n."<b>Business activities:</b> ".$_POST['business'];

$mail->Body    = $message;


if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

header('Location: index.php');

?>