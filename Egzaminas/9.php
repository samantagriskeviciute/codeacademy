<?php
class person {
    public $name;
    public $surname;
    public $age;
    function __construct($na, $su, $ag){
        $this->name = $na;
        $this->surname = $su;
        $this->age = $ag;
    }
    function asmendDuomenys(){
        $sablonas = "%s %s (%s)";
        echo sprintf($sablonas, $this->name, $this->surname, $this->age);
    }
}
class staff extends person {
    function asmendDuomenys(){
        $sablonas = "%s %s (%s)";
        echo sprintf($sablonas, $this->name, $this->surname, $this->age);
    }
}
class client extends person {
}
$p = new staff('Vardenis', 'Pavardenis', 50);
$p->asmendDuomenys();
echo '<br>';
$p = new staff('Jurgita', 'Grazuliene', 27);
$p->asmendDuomenys();
echo '<br>';
$p = new client('Samanta', 'Griskeviciute', 21);
$p->asmendDuomenys();