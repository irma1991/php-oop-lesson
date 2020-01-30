<?php
require "vendor/autoload.php";
use OOP\Mokytojai;
use OOP\Mokiniai;
use OOP\Darbuotojai;
use OOP\Spausdintuvas;


$mokytojas = new Mokytojai('Vardas: Jonas', 'Pavarde: Jonaitis', 'Amzius: 42',
    'Lytis: Vyras', 'Destomas dalykas: Matematika');
$mokytojas->setAtlyginimas('Atlyginimas: 800 Eur');
$mokinys = new Mokiniai('Vardas: Onute', 'Pavarde: Onaityte', 'Amzius: 15',
    'Lytis: Moteris', 'Vidurkis: 8.6');
$mokinys->setLankomasBurelis('Lankomas burelis: Informatikos');
$darbuotojas = new Darbuotojai('Vardas: Antanas', 'Pavarde: Antaninas',
    'Amzius: 52', 'Lytis: Vyras', 'Pareigos: Valytojas');

// statinis metodas
Spausdintuvas::spausdinti($mokytojas->getProfile());

?>

<ul>
    <?php foreach ($mokytojas->getProfile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
    <li><?=$mokytojas->getAtlyginimas()?></li>
</ul>

<ul>
    <?php foreach ($mokinys->getProfile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
    <li><?=$mokinys->getLankomasBurelis()?></li>
</ul>

<ul>
    <?php foreach ($darbuotojas->getProfile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
</ul>
