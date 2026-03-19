<?php

$email = filter_var($input, FILTER_VALIDATE_EMAIL);

if ($email === false) {
    // errore
}


// Con PHP85

$email = filter_var(
    $input,
    FILTER_VALIDATE_EMAIL,
    FILTER_THROW_ON_FAILURE
);
