<?php

require_once 'vendor/autoload.php';

$sO = new shawarma\ShawarmaOdeskaya();
$sG = new shawarma\ShawarmaGovyazhaya();
$basket = new shawarma\ShawarmaCalculator();
$basket->add($sG);
$basket->add($sO);
var_dump($basket->ingredients());
var_dump($basket->getCost());
var_dump($basket->getTitles());