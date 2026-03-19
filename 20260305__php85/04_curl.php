<?php

$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($ch);
$error    = curl_error($ch);   // salva subito (se serve)

if ($response === false) {
    throw new RuntimeException($error);
}

echo $response . PHP_EOL;

