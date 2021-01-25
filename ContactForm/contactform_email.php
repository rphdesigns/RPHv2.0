<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$error = ""; $successMessage = "";


if (array_key_exists('email',$_POST)) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $product = $_POST['product'];
  $service = $_POST['service'];
  $message = $_POST['message'];
  $product_error = "Selected Product...";
  $service_error = "Selected Service...";

  if (!$name) {
    $error .= 'Name is required.<br>';
  }
  if (!$email) {
    $error .= 'Email address is required.<br>';
  }
  // if ($product = $product_error) {
  //   $error .= 'Product is required.<br>';
  // }
  // if ($service = $service_error) {
  //   $error .= 'Service is required.<br>';
  // }

  if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $error .= "The email address is invalid. <br>";
  } 
  if ($error != "") {
    $error = '<div class="alert alert-danger" role+"alert"><p><strong>There were error(s) in your form:</strong></p>'.$error.'</div>';
  }
  else {
    require '../vendor/autoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'development@rphdesigns.com';
    $mail->Password = '';
    $mail->setFrom('development@rphdesigns.com', 'Michael heesch');
    $mail->addAddress('development@rphdesigns.com', 'RPH');
    $mail->Subject = 'RPH Contact Form';

    $mail->msgHTML(false);
    $body = 'Name: ' . $name . "<br>" . 'Email: ' . $email . "<br>" . 'Product: ' . $product . "<br>" . 'Service: ' . $service . "<br>" . 'Message: ' . $message;
    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);

    if(!$name && !$email && !$service && !$product){
      $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message did not send</strong></p></div>';
    }else {
      if ( !$mail->send()) {
      } else {
        $successMessage = '<div class="alert alert-success" role="alert"><p>Your message was sent</p></div>';
      }
    }
  }
}
