<?php

class zmogus{
    public $vardas ;
    public $pavarde ;
    public $gdata ;
    function info(){
        //visi vardai su rodiklytem obejektuose, tai kreipinis i class
        $this->vardas='Andrius';
        $this->pavarde='Andriukaitis';
        $this->gdata='1990-12-10';
        $s='Vardas: %s,pavarde: %s, gimimo data: %s';

        return sprintf($s,$this->vardas, $this->pavarde, $this->gdata);
    }
}

$zm= new zmogus();
echo $zm->info (). '<br>';//kvieciame funkcija
echo $zm->vardas . '<br>';//nuskaitome savybe
$zm->vardas='Tomas';//pakeiciame savybe
echo $zm->vardas. '<br>';//nuskaitome pakeista savybe
echo $zm->info (). '<br>';//pakeiciame funkcija

class darbuotojas{
    public $vardas='nezinomas';
    public $pavarde='nezinomas';
    public $atlyginimas=0;
    function info(){
        $s='Vardas: %s,pavarde: %s, atlyginimas : %s';
        return sprintf($s,$this->vardas, $this->pavarde, $this->atlyginimas);
    }
}

$db=new darbuotojas();
echo $db->info().'<br>';//kvieciame funkcija
$db->vardas='Jonas';
echo $db->info().'<br>';//kvieciame funkcija
$db->pavarde='Jonaitis';
$db->atlyginimas=1000;
echo $db->info().'<br>';//kvieciame funkcija
var_dump($db);
var_export($db).'<br>';
echo json_encode($db);

unset($db);//panaikiname klases egzemplioriu
//echo $db->info();//klaida