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

$mail->addAddress('enquiry@icvex.com');   // Optional name

// $mail->addAddress('ellen@example.com');
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->WordWrap = 50;
// $mail->addAttachment('/var/tmp/file.tar.gz');
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);


$mail->Subject = 'Booth Reservation from International Education Fair';

// $n = "\r\n\r\n";
$n = "<br>";
$message = "International Education Fair";

$message .= $n.$n."<b>First Name:</b> ".$_POST['firstname'];
$message .= $n."<b>Last Name:</b> ".$_POST['lastname'];
$message .= $n."<b>Company / Organization:</b> ".$_POST['company'];
$message .= $n."<b>What is your company specialty?:</b> ".$_POST['company_specialty'];
$message .= $n."<b>Job title / Job role:</b> ".$_POST['job_title'];

$message .= $n.$n."<b>Contact Information</b>";
$message .= $n."<b>Email Address:</b> ".$_POST['email'];
$message .= $n."<b>Confirm Email Address:</b> ".$_POST['email_confirmation'];
$message .= $n."<b>Mailing Address1:</b> ".$_POST['mailing_address_1'];
$message .= $n."<b>Mailing Address2:</b> ".$_POST['mailing_address_2'];
$message .= $n."<b>City:</b> ".$_POST['city'];
$message .= $n."<b>State / Province:</b> ".$_POST['province'];
$message .= $n."<b>Zip:</b> ".$_POST['zip'];
$message .= $n."<b>Country:</b> ".$_POST['country'];
$message .= $n."<b>Telephone:</b> ".$_POST['telephone'];

$message .= $n.$n."<b>Which of the following are you interested in?</b>";
$message .= $n.($_POST['raw_space'] ? "&#x25a3;" : "&#x25a2;")." Raw Space (Min 18 sq.m.)";
$message .= $n.($_POST['standard_booth'] ? "&#x25a3;" : "&#x25a2;")." Standard Booth";

$message .= $n.$n."<b>Expected Total</b> ".$_POST['expected_total']." <b>sq.m.</b>";

$mail->Body    = $message;


if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

header('Location: index.php');

?>