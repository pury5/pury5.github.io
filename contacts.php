<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = 'From: Test';
$to = 'mlogvynuk@gmail.com';
$subject = $_POST['subject'];
$human = $_POST['human'];

$body = "From: $name \n E-Mail: $email \n Subject: $subject \n Message: $message";

if($_POST['submit'] && $human == '4') {
    if(mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent</p>'
    }else{
        echo '<p>Something went wrong, go back and try again!</p>'
    }
}else if ($_POST['submit'] && $human !='4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>'
}
?>