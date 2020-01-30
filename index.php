<?php
require "vendor/autoload.php";
use OOP\User;
use OOP\Teacher;

$user = new User('Vardas', 'emailas', 'telefonas');
?>

<ul>

<li><?=$user;?></li>

</ul>
