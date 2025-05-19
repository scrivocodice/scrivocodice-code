<?php


$connection = new PDO(
    'sqlite:foo.db',
    $username,
    $password,
); // object(PDO)

$connection->sqliteCreateFunction(
    'prepend_php',
    static fn ($string) => "PHP {$string}",
);

$connection->query('SELECT prepend_php(version) FROM php');

