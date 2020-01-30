<?php
class TransportoPriemone{
    private $modelis;
    private $marke;
    private $kaina;
    private $svoris;
    private $variklis;
    private $variklioGalingumas;
    private $maksimalusGreitis;
    private $aprasymas;
    private $talpinaZmoniu;

    public function __construct($modelis, $marke)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
    }

    public function get(){
        $data[] = $this->modelis;
        $data[] = $this->marke;

        return $data;
    }

    public function getKaina(){
        return $this->kaina;
    }

    public function setKaina($kaina){
        $this->kaina = $kaina;
    }

    public function getSvoris(){
        return $this->svoris;
    }

    public function setKSvoris($svoris){
        $this->svoris = $svoris;
    }

    public function getVariklis(){
        return $this->variklis;
    }

    public function setVariklis($variklis){
        $this->variklis = $variklis;
    }

    public function getVariklioGalingumas(){
        return $this->variklioGalingumas;
    }

    public function setVariklioGalingumas($variklioGalingumas){
        if($this->variklis == true){
            $this->variklioGalingumas = $variklioGalingumas;
        } else {
            echo "Transporto priemone variklio neturi";
        }
    }

    public function getMaksilamusGreitis(){
        return $this->maksimalusGreitis;
    }

    public function setMaksilamusGreitis($maksimalusGreitis){
        $this->maksimalusGreitis = $maksimalusGreitis;
    }

    public function getAprasymas(){
        return $this->aprasymas;
    }

    public function setAprasymas($aprasymas){
        $this->aprasymas = $aprasymas;
    }

    public function getTalpinaZmoniu(){
        return $this->talpinaZmoniu;
    }

    public function setTalpinaZmoniu($talpinaZmoniu){
        $this->talpinaZmoniu = $talpinaZmoniu;
    }
}

$automobilis = new TransportoPriemone('Modelis: 5', 'Marke: BMW');
$automobilis->setKaina('Kaina: 3500 Eur');
$automobilis->setKSvoris('Svoris: 500 kg');
$automobilis->setVariklis('Variklis: 5 cm3');
$automobilis->setVariklioGalingumas('Variklio galingumas: 1000 kW');
$automobilis->setMaksilamusGreitis('Maksimalus greitis: 300 km/h');
$automobilis->setAprasymas('Aprasymas: pati galingiausia ir graziausia masina!');
$automobilis->setTalpinaZmoniu('Talpina zmoniu: 5');
?>

<ul>
    <?php foreach ($automobilis->get() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
</ul>

<ul>
    <li><?=$automobilis->getKaina();?></li>
    <li><?=$automobilis->getSvoris();?></li>
    <li><?=$automobilis->getVariklis();?></li>
    <li><?=$automobilis->getVariklioGalingumas();?></li>
    <li><?=$automobilis->getMaksilamusGreitis();?></li>
    <li><?=$automobilis->getAprasymas();?></li>
    <li><?=$automobilis->getTalpinaZmoniu();?></li>
</ul>
