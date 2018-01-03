<?php
$s="Labas rytas!, Labas vakaras!";

$e=explode(' ' ,$s);

for($m=0;$m<count($e);$m++){
    $e[$m]=ucfirst(strtolower($e[$m]));
}
$a=implode('|',$e);
echo($a);