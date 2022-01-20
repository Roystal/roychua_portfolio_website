<?php
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$number = $_POST['number'];
$topic = $_POST['topic'];

if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'roystal@gmail.com';
$email_subject = "New Form Submissions: $topic"
$email_body = "You have received a new message from the user $name. \n".
    "email address: $visitor_email\n".
    "Here is the message:\n $message".

$to = "roystal@gmail.com";
$headers = "From: $email_from \r\n";

if(mail($to,$email_subject,$email_body,$headers)){
    echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    };