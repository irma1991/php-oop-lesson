<?php

namespace OOP;

class Mokytojai extends Bendruomenes_Nariai
{
    protected $destomasDalykas;
    protected $atlyginimas;

    public function __construct($vardas, $pavarde, $amzius, $lytis, $destomasDalykas)
    {
        parent::__construct($vardas, $pavarde, $amzius, $lytis);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->lytis = $lytis;
        $this->destomasDalykas = $destomasDalykas;
    }

    public function getProfile(){
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->amzius;
        $data[] = $this->lytis;
        $data[] = $this->destomasDalykas;
        return $data;
    }

    public function setAtlyginimas($atlyginimas){
        $this->atlyginimas = $atlyginimas;
    }

    public function getAtlyginimas(){
        return $this->atlyginimas;
    }
}