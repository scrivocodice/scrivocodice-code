<?php

class Config
{
    public static private(set) string $environment = 'prod';

    public static function setEnvironment(string $env): void
    {
        self::$environment = $env;
    }

}

echo Config::$environment . " \n"; // OK

# Config::$environment = 'dev'; // ❌ non consentito
# echo Config::$environment . " \n"; // OK

Config::setEnvironment('dev');
echo Config::$environment . " \n"; // OK
