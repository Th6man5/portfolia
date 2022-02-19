<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_form = 'raihanm854@gmail.com';

$email_subject = "New Form Submission";

$email_body = "Name: $name.\n".
                "Email: $visitor_email.\n".
                "Message: $message.\n";

                $to = "th6man5@gmail.com";
                $headers = "From: $email_from \r\n";
                $headers = "Reply-To: $visitor_email \r\n";
                mail($to,$email_subject,$email_body,$headers);

                header("location: index.html");
?>

