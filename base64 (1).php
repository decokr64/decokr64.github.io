<?php

$HmB =  [];

$STM = '';

foreach ($HmB as $value) {
    $decoded = base64_decode($value);
    $num = preg_replace('/\D/', '', $decoded);
    $char = chr($num - 77464694);
    $STM .= $char;
}

file_put_contents('text.txt', $STM);

echo 'Archivo guardado como text.txt';
?>
