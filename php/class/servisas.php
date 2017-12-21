<?php

class servisas extends autoklases{
    function info(){//apsirasau funkcija eilute
    $s = 'gamintojas: %s,modelis: %s, metai : %s';
    return sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
}

}