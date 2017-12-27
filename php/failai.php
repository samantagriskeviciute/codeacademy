<?php
$f = fopen("failas.txt", "w");
$txt = "Labas rytas";
fwrite($f, $txt);
fclose($f);
echo 'irasyta<br>';

$f = fopen("failas.txt", "a");
$txt = "2017";
fwrite($f, $txt);
fclose($f);
echo 'papildytas<br>';

if(!file_exists('failai2')){
    mkdir('failai2');
    echo 'dir-as sukurtas<br>';
}
rmdir('failai2');
echo 'dir-as pasalintas<br>';

copy('failai.txt','failai/failas.txt');
echo 'failas nukopijuotas<br>';

unlink('failai/failas.txt');
echo 'failas pasalintas<br>';

$a=scandir('.');//paima viso failo direktorijos informacija
//var_export($a);
foreach ($a as $fn){
    echo $fn.'<br>';
}