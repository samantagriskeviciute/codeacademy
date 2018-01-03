<?php
function sum($a,$b,$c){
    $s="Labas%s rytas%s mieleji%s";
    return sprintf($s,$a,$b,$c);
}

echo sum('aaa','bbb','ccc');

