<?php

class zmogus{
    public $vardas;
    public $pavarde;
    public $amzius;
    function __construct($v, $p,$a){
        $this->vardas=$v;
        $this->pavarde=$p;
        $this->amzius=$a;
    }
    static function keisti ($s){
        return ucfirst(strtolower($s));
    }
    function keisti2 ($s){
        return self::keisti($s);
    }
}

class mokinys extends zmogus{
    function keisti2($s){
        return strtoupper($s).' '. parent::keisti2($s);
}
}
echo zmogus::keisti('tomas').'<br>';
//echo zmogus::keisti2('tomas').'<br>';
$z=new zmogus('jonas','jonaitis',25);
echo $z->keisti('tomas').'<br>';
$m=new zmogus('antanas','jonaitis',25);
echo $m->keisti2('tomas').'<br>';