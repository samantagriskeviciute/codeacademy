<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/
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
