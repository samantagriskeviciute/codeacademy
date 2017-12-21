<?php
class automobilis{//sudarymas klases
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($gamintojas, $modelis, $metai){//apsirasau funkcija
        $this->gamintojas = ucfirst(strtolower($gamintojas));
        $this->modelis = ucfirst(strtolower($modelis));
        $this->metai = ucfirst(strtolower($metai));
    }

    function info(){//apsirasau funkcija eilute
        $s = 'gamintojas: %s,modelis: %s, metai : %s';
        return sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
$auto=[];//kintamasis yra masyvas
$auto[]=new automobilis ('voketija','bmw','2010');//sukuria klase imant ojekta
$auto[]=new automobilis('danija','audi','1990');
$auto[]=new automobilis('britanija','renoul','2017');

foreach ($auto as $au){//vykdo cikla, kuri spauzdina ekrane
    echo  $au->info().'<br>';}