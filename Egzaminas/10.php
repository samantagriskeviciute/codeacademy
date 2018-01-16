<?php
class numberList {
    public $numbers;
    function add($number){
        if (!isset($this->numbers)) $this->numbers = [];
        $this->numbers[] = $number;
    }
    function average(){
        $sum = 0;
        for ($a=0; $a<count($this->numbers); $a++){
            $sum += $this->numbers[$a];
        }
        return $sum / count($this->numbers);
    }
}
$elementas = new numberList();
$elementas->add(1);
$elementas->add(13);
$elementas->add(1103);
echo $elementas->average();