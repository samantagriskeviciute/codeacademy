<?php

class zmogus {
    const copy='CodeAcademy';
    const aaa='bbb';
    public $vardas;
    public $pavarde;
    public $amzius;
    private $sablonas='Vardas: %s, pavarde: %s, amzius: %s';

    function __construct($v,$p,$a= 'nezinomas'){
        $this->vardas=$this->pakeisti($v);
        $this->pavarde=$this->pakeisti($p);
        $this->amzius=$a;
    }
    private function pakeisti ($s){
        return ucfirst(strtolower($s));
    }
    public function eilute(){
        return sprintf($this->sablonas,$this->vardas, $this->pavarde,$this->amzius);
    }
}
$z=new zmogus('Jonas','joniuks', 25);
echo $z-> vardas. '<br>';
//echo $z-> sablonas. '<br>';//klaida
echo $z->eilute().'<br>';
//echo $z->pakeisti('jonas').'<br>';klaida
define('aaa','labas');//konstantes pavadinimas,o labas yra reiksme kuri yra priskiriama butent tai konmstantei
echo aaa . '<br>';
echo zmogus::copy. '<br>';

class mokinys extends zmogus{// nauja klase, kuri paveldi viska kas buvo surasyta pirmoj klasej
  public $pazymys;
  function __construct($v,$p,$a,$pa){
      $this->vardas=$v;
      $this->pavarde=$p;
      $this->amzius=$a;
      $this->pazymys=$pa;
  }
}
$mo=new mokinys('Jonas','joniuks', 21,10);
var_dump($mo);
echo mokinys::copy. '<br>';