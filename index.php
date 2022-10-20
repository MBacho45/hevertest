<?php
$to = "testspoofing45@gmail.com";
$subjec = "Email spoofing test";
$text = "This is Email spoofing";
$headers = "From: hackeurcho.web45@gmail";
mail($to, $subjec, $text, $headers);

echo 'Hello';
