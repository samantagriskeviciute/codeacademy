<?php

$t = date("H");
var_dump($t);

if ($t > "6") {
    echo "Geros tau dienos!";
}else echo 'Gero tau vakaro :)';

echo '<br>';

$a=5;
if ($a==5)echo 'Lygu'.'<br>';//salyga
else if ($a>5)echo 'Daugiau<br>';//tenkinamas arba netenkinama salyga
else {
    echo 'Maziau';
    echo '<br>';
}
