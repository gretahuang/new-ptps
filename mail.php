<?php
$subject = $_POST['subject'];


// if ($subject == 'Publicity') {
//     $to = 'ptps.berkeley.publicity@gmail.com';
// } elseif ($subject == 'Site Questions') {
//     $to = 'ptps.berkeley.site@gmail.com';
// } else {
//     $to = 'ptps.berkeley@gmail.com';
// }

// testing
$to = 'tateviks96@gmail.com';
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