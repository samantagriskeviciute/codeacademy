<?php

include "class/autoklases.php";
include "class/servisas.php";

$auto=[];//kintamasis yra masyvas
$auto[]=new servisas ('voketija','bmw','2010');//sukuria klase imant ojekta
$auto[]=new servisas('danija','audi','1990');
$auto[]=new servisas('britanija','renoul','2017');

foreach ($auto as $au){//vykdo cikla, kuri spauzdina ekrane
    echo  $au->info().'<br>';}