<?php

class Cerchio
{
    public float $raggio;

    public float $area {
        get {
            return pi() * $this->raggio ** 2;
        }
    }

    public function __construct(float $raggio)
    {
        $this->raggio = $raggio;
    }
}

$cerchio = new Cerchio(5);
echo $cerchio->area; // 78.5398...
// $cerchio->area = 100; // Errore: impossibile impostare una proprietà sola lettura
