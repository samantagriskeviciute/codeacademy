<?php
/*sukurkite php, kuriame aprasyta funkcija, kuriai padavus du parametrus-skaicius.
funkcija turi sudeti skaicius,pakelti kvadratu ir padalinti is 3. Rezultata grazinti.
Iskviesti funkcija perduodant du parametrus (skaicius) ir parodyti rezultata.
 */
function nauja ($a,$b){//du parametrai
   return $c=(sqrt($a**2+$b**2))/3;//pargrazintas rezultatas
}
$c=nauja(2,4);//nurodau skaicius
echo $c;//isvedu i ekrana