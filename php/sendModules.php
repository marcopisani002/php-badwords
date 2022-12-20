<?php
$message = $_GET["message"];

echo "Messaggio ricevuto:" . $message . "<br>";

echo strlen($message) . "<br>";


echo str_replace("mario", "****", $message);


?>
