<?php
    if(!isset($_POST['submit'])) {
        echo "Error, please submit the form";
    }
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($email)) {
    echo "Enter a name and email";
    exit;
}

$from = "rainbowrefuge@riseup.net";
$subject = "Rainbow Refuge";
$body = "Name: $name\nEmail: $email\nMessage: $message"

$to = "rainbowrefuge@riseup.net";

mail($to, $subject, $body);
?>