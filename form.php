

<?php
if (isset($_POST['email']) && !empty($_POST['email'])) 
{
$to      = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: pinkisaraswat176@gmail.com'       . "\r\n" .'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

die('Thank you for your email');
}
?>
