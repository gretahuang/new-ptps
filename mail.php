<?php

// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");

$subject = $_POST['subject'];

if ($subject == 'Publicity') {
    $to = 'ptps.berkeley.publicity@gmail.com';
} elseif ($subject == 'Site Questions') {
    $to = 'ptps.berkeley.site@gmail.com';
} else {
    $to = 'ptps.berkeley@gmail.com';
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$message = <<< EMAIL

$message

From $name
$email

EMAIL;
$header = '$email';
mail($to, $subject, $header, $message);

?>