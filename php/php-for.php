<?php
//ciklas tipo for
$masyvas=['Bmw','Audi','Honda','Jaguar'];

for ($i=0; $i<count($masyvas); $i++){
    $masina= $masyvas[$i];
    echo($i+1).'.'. $masina.'<br>';
}

$ii=10;
foreach ($masyvas as $masina){
    echo($i++).'.'. $masina.'<br>';
}
?>