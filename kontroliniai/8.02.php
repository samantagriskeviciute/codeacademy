<?php
class codeAcademy{
    public $data;
    public $skaicius;
    public $auditorija;

    function __construct($data,$skaicius,$auditorija){
        $this->data = $data;
        $this->skaicius=$skaicius;
        $this->auditorija=$auditorija;
    }
}
$nauja=new codeAcademy('2000','5', '3');
var_dump(codeAcademy);
