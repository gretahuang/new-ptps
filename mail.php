<?php

$subject = $_POST["subject"];
if ($subject == 'Course Logistics') {
    $to = 'info@ptps.berkeley.edu';
} elseif ($subject == 'Site Questions') {
    $to = 'tatevik@berkeley.edu, tateviks96@gmail.com';
} else {
    $to = 'director@ptps.berkeley.edu';
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

