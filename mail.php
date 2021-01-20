<!DOCTYPE html>
<html>
<body>

<?php
$to      = 'alifwr@protonmail.ch';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo 'success';
?>

</body>
</html>