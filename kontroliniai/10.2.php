<?php

class personalas { // personalas klases aprašas
    public $darbuotojai; // savybė kur bus talpinamas persona masyvas
    function persona($vardas, $pavarde, $lytis){ // funkcija zmoniu patalpinimui personalas (savybėje)
        if (!isset($this->darbuotojai)) $this->darbuotojai = []; // jeigu savybė (masyvas) dar nepanaudotas priskiriame tuščia paprastą masyvą
        $this->darbuotojai[] = [ // sukuriame personos asociatyvinį masyvą ir patalpiname savybėje (masyve)
            'va' => $vardas,
            'pa' => $pavarde,
            'ly' => $lytis
        ];
    }
    function kiekMoteru(){ // funkcija kiekMoteru kuri grazina personalo moteru skaiciu
    $sum =0; //
    for ($i=0; $i<count($this->darbuotojai); $i++) {
        if ($this->darbuotojai[$i]['ly'] == 'moteris') $sum += 1;
    }
    return $sum;
}
    function kiekVyru(){ // funkcija kiekMoteru kuri grazina personalo moteru skaiciu
        $sum =0; //
        for ($i=0; $i<count($this->darbuotojai); $i++) {
            if ($this->darbuotojai[$i]['ly'] == 'vyras') $sum += 1;
        }
        return $sum;
    }
}

$objektas = new personalas(); // sukuriame klasės objekto egzempliorių
$objektas->persona('Sandra','Sandraite','moteris');
$objektas->persona('Odeta', 'Odetaite','moteris');
$objektas->persona('Juozapas', 'Petraitis','vyras');
$objektas->persona('Violeta', 'Milaitiene','moteris');
echo $objektas->kiekMoteru(); // surandame moteru skaiciu
echo '<br>';
echo $objektas->kiekVyru(); // surandame vyru skaiciu ir ją parodome
echo '<br>';