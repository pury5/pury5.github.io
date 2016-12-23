<?php
$name = $_POST[&#039name&#039];
$email = $_POST[&#039email&#039];
$subject = $_POST[&#039subject&#039];
$message = $_POST[&#039message&#039];
$from = &#039From: Test&#039;
$to = &#039mlogvynuk@gmail.com&#039;
$subject = $_POST[&#039subject&#039];
$human = $_POST[&#039human&#039];

$body = &#039From: $name \n E-Mail: $email \n Subject: $subject \n Message: $message&#039;

if($_POST[&#039submit&#039] && $human == &#0394&#039) {
    if(mail($to, $subject, $body, $from)) {
        echo &#039<p>Your message has been sent</p>&#039
    }else{
        echo &#039<p>Something went wrong, go back and try again!</p>&#039
    }
}else if ($_POST[&#039submit&#039] && $human !=&#0394&#039) {
    echo &#039<p>You answered the anti-spam question incorrectly!</p>&#039
}
?>