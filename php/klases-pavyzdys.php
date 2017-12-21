<?php

class svecias{
    public $vardas;
    public $pavarde;
    public $maistas;
    function __construct($vardas,$pavarde,$maistas){
        $this->vardas=ucfirst(strtolower($vardas));
        $this->pavarde=ucfirst(strtolower($pavarde));
        $this->maistas=ucfirst(strtolower($maistas));
    }
    function info(){
        $s='Vardas: %s,pavarde: %s, maistas : %s';
        return sprintf($s,$this->vardas, $this->pavarde, $this->maistas);
    }
    function eilute(){
        $s='<tr>';
        $s.='<td>'. $this->vardas.'</td>';
        $s.='<td>'. $this->pavarde.'</td>';
        $s.='<td>'. $this->maistas.'</td>';
        $s.='<tr>';
        return $s;
    }
}
$sveciai=[];
$sveciai[]=new svecias('pertas','petraitis','zuvis');
$sveciai[]=new svecias('janina','petraitiene','mesa');
$sveciai[]=new svecias('sandra','petraityte','salotos');
var_dump($sveciai);

echo '<table>';
foreach ($sveciai as $sv){//ciklas sutrumpintas variantas
    echo  $sv->eilute();
}
echo '</table>';



