<?php 

$name = $_POST['your_name'];
$email = $_POST['your_email'];
$text = $_POST['your_text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'abbas.baab@mail.ru';                 // Наш логин
$mail->Password = 'asdQsd2sadsd';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('abbas.baab@mail.ru', 'Abbas Baab');   // От кого письмо 
$mail->addAddress($email);  
$mail->addAdress("smokels1998@gmail.com")     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Это тема сообщения';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	name: ' . $name . ';
	email: ' . $email . ';
	text: ' . $text . '';

$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "no";
} else {
    echo "yes";
}

?>