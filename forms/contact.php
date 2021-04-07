<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'venkateshjuly1997@gmail.com';

  
  $to = $receiving_email_address;
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = array(
    'From' => $from_email
  );
  mail($to,$to, $subject, $message, implode("\r\n", $headers));

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $add_message( $_POST['name'], 'From');
  // $add_message( $_POST['email'], 'Email');
  // $add_message( $_POST['message'], 'Message', 10);

  // echo $send();
?>
