<?php

function automatas ($pinigai, $pavadinimas){
    $prekes=[
        'coca'=>1,
        'mineralinis'=>0.5,
        'traskuciai'=>0.75,
        'sprite'=>1.2
    ];
    if(isset($prekes[$pavadinimas])){
        $preke = $prekes[$pavadinimas];
        if($pinigai>=$preke){
            //pekes iskrenta pro skyle
            if($pinigai ==$peke){
                echo('pasiimkite preke');
                }
        else{
                echo'pasiimkite preke ir graza';
        }
        return $preke;
        }
        else{
            echo 'per mazai pinigu';
            return $ pinigai;
        }
    }
else 'nera tokios prekes';
    return $pinigai;
}
}
// ateina petras ir nori coca
$preke= automatas(1,'coca');
$fnc=automatas;

echo $preke;
////1)$mas=['a'=>1, 'b'=>2];
/// 2)echo ($mas ['b']);
/// 1)funkcija skaiciuoti pagal pitagoro teorema
/// 2)padaryti funkcija, kreiptis i funkcija ir isvesti rezultata su echo
/// kelimas kvadratu = **
///