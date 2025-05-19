<?php

class Utente
{
    public string $password {
        set(string $valore) {
            $this->hashedPassword = password_hash($valore, PASSWORD_DEFAULT);
        }
    }

    private string $hashedPassword;
}

$utente = new Utente();
$utente->password = 'segreto';
echo $utente->password; // Errore: impossibile accedere a una proprietà sola scrittura
