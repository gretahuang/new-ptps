<?php
$subject = $_POST["subject"];


if ($subject == 'Publicity') {
    $to = 'tateviks96@gmail.com';
    // $to = 'ptps.berkeley.publicity@gmail.com';
} elseif ($subject == 'Site Questions') {
    $to = 'johnclara@comcast.net';
    // $to = 'ptps.berkeley.site@gmail.com';
} else {
    $to = 'tatevik.stepanyan@berkeley.edu';
    // $to = 'ptps.berkeley@gmail.com';
}

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$message = <<< EMAIL

$message

From $name
$email
EMAIL;

$result = mail($to, $subject, $message);
?>

