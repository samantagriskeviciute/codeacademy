<?php
//asociatyviniai masyvai
$sveciai=[
['vardas'=>'Jonas','pavarde'=>'Jonaitis','patiekalas'=>'mesa','issilavinimas'=>'dr'],
['vardas'=>'Petras','pavarde'=>'Petraitis','patiekalas'=>'zuvis'],
['vardas'=>'Sandra','pavarde'=>'Sandrita','patiekalas'=>'salotos','issilavinimas'=>'bureja']
];
function info($e){
    $s=' Vardas: '.$e['vardas'].' Pavarde: '.$e['pavarde']. ' Patiekalas: ' .$e['patiekalas'];
    if(isset($e['issilavinimas']))
        $s.= ' ' . $e['issilavinimas'];
        return $s;
}
echo 'Sveciu sarasas:<br>';
echo '--------------<br>';

for($i=0; $i<count($sveciai); $i++){
    $line=($i+1).'.' .info($sveciai[$i]). '<br>';
    echo $line;
}
echo '--------------<br>';
echo 'is viso sveciu' .count($sveciai);
