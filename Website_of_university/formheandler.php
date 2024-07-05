<?php
$name = $_REQUEST['name'];
$visitor = $_REQUEST['email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];
$btn = $_REQUEST['submit'];

$email_from = 'univercity@gmail.com';

$email_subject = 'New From Submission';

$email_body = "User Name : $name .\n",
                "User Email : $visitor .\n",
                "Subject : $subject .\n",
                "User Message : $messge .\n";

$to = 'mb766@gmail.com';

$headlers = "From :$email_from \r\n";

$headlers .= "Reply-To : $visitor \r\n";

mail($to ,$email_subject,$email_body,$headlers);
header("Location: contact.html");
?>