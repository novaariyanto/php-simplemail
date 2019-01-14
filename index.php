
<?php 


require 'libmail.php';

$mail = new SimpleMail('smtp.gmail.com', 587, 'tls');
$mail->auth('gmaccount@gmail.com', 'sekolah100%');

$mail->from('mamapungli@gmail.com', 'Burt Johnson');
$mail->to('novasampoerna@gmail.com', 'John Smith');

$mail->subject = 'Hello, partner';
$mail->message = '<h3>My Message</h3>
                  <b>This</b> is a html test message.';

if ($mail->send())
	echo 'Mail sent successfully.';
else
	echo 'Error: ' . $mail->error;

?>