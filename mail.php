<?php

$subject = $_POST["subject"];
if ($subject == 'Publicity') {
    $to = 'ptps.berkeley.publicity@gmail.com';
} elseif ($subject == 'Site Questions') {
    $to = 'ptps.berkeley.site@gmail.com';
} else {
    $to = 'ptps.berkeley@gmail.com';
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

