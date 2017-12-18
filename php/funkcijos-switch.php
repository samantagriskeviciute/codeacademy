<?php
//dinaminio puslapio dalis
function spalvos_kodas($spalva){
    switch ($spalva){
        case 'raudona': $kodas='red';break;
        case 'geltonas': $kodas='yellow';break;
        case 'tamsus': $kodas='#2222222';break;
        default: $kodas= 'black';
    }
    return $kodas;
}
echo '<p style="color:' . spalvos_kodas('raudona') . '">labas</p>';
//echo <p style="color:red">labas</p>