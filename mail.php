<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$nickname = $_POST['user_nikcname'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$friends = $_POST['friends'];
$another = $_POST['another'];
$school = $_POST['school'];
$organization = $_POST['organization'];
$about_candidat = $_POST['about_candidat'];





$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																				
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tkram00@mail.ru'; 
$mail->Password = 'goAPRP2f3vr)'; 
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / 
$mail->addAttachment($_FILES['user_file']['tmp_name'], $_FILES['user_file']['name']);
$mail->setFrom('tkram00@mail.ru'); 
$mail->addAddress('taras.kram@humanit.group');    
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Zgloszenie od klienta';


$mail->Body = 'Name: ' .$name. '<br>Surname: ' .$surname. '<br>Phone: ' .$phone. '<br>E-mail: ' .$email. '<br>Instagram nickname: ' .$nickname. '<br>Learned about us from: ' .$instagram. ' ' .$facebook. ' ' .$linkedin. ' ' .$friends. ' ' .$another. '<br>School: ' .$school. '<br>Organization: ' .$organization. '<br>About candidate: ' .$about_candidat. ' ' .$cv;


$mail->AltBody = '';
if ( $_POST['agree'] == '')
{
echo 'non checked';
}
  else {
        if(!$mail->send()) {
    echo 'Error';
} else {
        header('location: thanku.html');
    }
}
?>