<?php

class Persona
{
    public string $nomeCompleto {
        get {
            return $this->nome . ' ' . $this->cognome;
        }
    }

    public function __construct(
        public string $nome,
        public string $cognome
    ) {}
}

$persona = new Persona('Mario', 'Rossi');
echo $persona->nomeCompleto; // Mario Rossi

echo "<br>";

$persona->nome = 'Pippo';
echo $persona->nomeCompleto; // Pippo Rossi

$persona->nomeCompleto = 'aaa';
