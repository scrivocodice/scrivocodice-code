<?php


$connection = PDO::connect(
    'sqlite:foo.db',
    $username,
    $password,
); // object(Pdo\Sqlite)

$connection->createFunction(
    'prepend_php',
    static fn ($string) => "PHP {$string}",
); // Does not exist on a mismatching driver.

$connection->query('SELECT prepend_php(version) FROM php');

