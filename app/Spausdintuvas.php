<?php
namespace OOP;

class Spausdintuvas
{
    public static function spausdinti($data){
        foreach ($data as $value){
            echo $value ."\n";
        }
    }
}