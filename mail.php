<?php

$subject = $_POST["subject"];
if ($subject == 'Course Logistics') {
    $to = "site@ptps.berkeley.edu, director@ptps.berkeley.edu";
} elseif ($subject == 'Site Questions') {
    $to = "site@ptps.berkeley.edu, director@ptps.berkeley.edu";
} else {
    $to = "site@ptps.berkeley.edu, director@ptps.berkeley.edu";
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

