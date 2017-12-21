<?php

class autoklases{//sudarymas klases
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($g,$m,$y){
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->metai = $y;
    }
}