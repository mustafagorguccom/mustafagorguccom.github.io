<?php

// Contact subject
$subject ="$subject"; 

// Details
$message="$message";

// Mail of sender
$mail_from="$email"; 

// From 
$header="from: $name <$mail_from>";

// Enter your email address
$to ='gorgucmustafa@hotmail.com';
$contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($contact){
echo "Mesajiniz alindi, en kisa surede okuyup size cevap yazacagim.";
}
else {
echo "ERROR";
}
?>