<?php
$a = ['mama','tetis','dukra','sunus','anuke'];
$n = 0;
foreach($a as $g){
    $a[$n++] = strtoupper($g);
}
var_dump($a);