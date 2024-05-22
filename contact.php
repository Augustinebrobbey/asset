<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'Asset Decor Website';
$email_subject = 'New Message From Asset Decor Contact';
$email_body = "Name: $name.\n".
               "Email: $email.\n".
               "Subject: $subject.\n".
               "Message: $message.\n";

$to = "assetdecor6gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $email \r";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
               
?>
