<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!-- html komentaras -->
<script>
    //java script komentaras
</script>

<?php
echo 'labas'; //php komentaras
/*komentaras
komentaras
*/
// kintamieji
$a=5; //skaicius
$af=5.6;//float
$af=3.1e-3; //float
$b=true; //boolean loginis
$c="abc"; //string
$d=['bmw','honda']; //masyvas
$e=new stdClass(); //objektas
$f= null; //nieko nera,tikrinimo metu galima pasiziureti ar yra ar ne.

//kinatamieji gali buti 3 rusiu
//local $a=5;
//static jei be klasiu dirbi
//globul prieinamas visur

function pvz_static(){
    static $a=0;//sukurimas su pradine reiksme
    $a++;//+1
echo $a. '<br>';//parodymas
}
pvz_static();//sukuriamas $a; +1, parodoma
pvz_static();//+1, parodoma
pvz_static();//+ 1, parodoma
pvz_static();

$g="labas";

function pvz_local(){
    //$g="rytas";
    echo $g."<br>";
}
pvz_local(); //bus klaida


global $h;
$h="labas";
function pvz_global(){
    global $h;
    echo $h."<br>";
}
pvz_global();
echo $GLOBALS['h']."<br>";
echo $h. " rytas". "<br>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";

eval('$s= "aaa";');//ivykdo php koda is teksto
// tikrina kai ",kai' zino
echo $s. "<br>";
unset($s);//panaikina
echo $s. "<br>";//klaida
//konstante naudojama klasese
define('konst','labas'); //konstante,pavadinimas labas, konst be $ zenklo
echo konst."<br>";

//const konst='labas'; sintakse kuri naudojama tik klasese



?>

</body>
</html>