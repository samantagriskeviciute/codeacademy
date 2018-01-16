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
}
$v = new person('Samanta', 'Griskeviciute', 22);
var_export($v);