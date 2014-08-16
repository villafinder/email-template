<?php
$to  = 'adrien@villa-bali.com' . ', ';

// subject
$subject = 'Template Email Test';

// message
$message = file_get_contents('./index.html');

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Adrien <adrien@villa-bali.com>' . "\r\n";
$headers .= 'From: Villa-Bali.com <contact@villa-bali.com>' . "\r\n";

// Mail it
echo mail($to, $subject, $message, $headers);
?>