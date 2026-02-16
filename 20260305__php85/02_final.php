<?php

class User
{
    public function __construct(
        public final string $username,
        public final string $email
    ) {}
}

// Prima della property promotion
class User
{
    public final string $username;
    public final string $email;

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}
