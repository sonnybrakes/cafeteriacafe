<?php

$name = $_POST['name'];
$email = $_POST['email'];
$data = $name . "," . $email;

$file = "file.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

print "Thank you for submitting your email address.";
 ?>
