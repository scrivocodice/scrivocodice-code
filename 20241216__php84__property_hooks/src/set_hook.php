<?php

class Persona
{
    public string $nome {
        set(string $value) {
            $this->nome = strtoupper($value);
        }
    }

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}

$persona = new Persona('mario');
echo $persona->nome; // MARIO
