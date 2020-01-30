<?php

namespace OOP;

class Mokiniai extends Bendruomenes_Nariai
{
    protected $vidurkis;
    protected $lankomasBurelis;

    public function __construct($vardas, $pavarde, $amzius, $lytis, $vidurkis)
    {
        parent::__construct($vardas, $pavarde, $amzius, $lytis);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->lytis = $lytis;
        $this->vidurkis = $vidurkis;
    }

    public function getProfile(){
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->amzius;
        $data[] = $this->lytis;
        $data[] = $this->vidurkis;
        return $data;
    }


    public function setLankomasBurelis($lankomasBurelis){
        $this->lankomasBurelis = $lankomasBurelis;
    }

    public function getLankomasBurelis(){
        return $this->lankomasBurelis;
    }
}