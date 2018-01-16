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

<?php
/*
Padaryti klasę personalas. Sukurti funkciją persona. Parametrai: a) vardas, b) pavardė, c) lytis. Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas). Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu. Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
*/
class personalas { // personalo klases aprašas
    public $darbuotojai; // savybė kur bus talpinamas darbuotojų masyvas
    function persona($vardas, $pavarde, $lytis){ // funkcija personos patalpinimui darbuotoju sarase (savybėje)
        if (!isset($this->darbuotojai)) $this->v = []; // jeigu savybė (masyvas) dar nepanaudotas priskiriame tuščia paprastą masyvą
        $this->darbuotojai[] = [ // sukuriame automobilio asociatyvinį masyvą ir patalpiname savybėje (masyve)
            'var' => $vardas,
            'pav' => $pavarde,
            'lyt' => $lytis
        ];
    }
    function kiekMoteru(){ // funkcija apskaiciuoti personalo moteru skaiciu
        $sum = 0; // pradzioje suma = 0
        for ($i=0; $i<count($this->darbuotojai); $i++){ // imame darbuotojus po vieną iš masyvo
            if ($this->darbuotojai[$i]['lyt'] == 'mot') $sum++; // jeigu moteris, tai +1
        }
        return $sum; // gražiname personalo moteru skaiciu kaip funkcijos rezultatą
    }
    function kiekVyru(){ // funkcija apskaiciuoti personalo vyru skaiciu
        $sum = 0; // pradzioje suma = 0
        for ($i=0; $i<count($this->darbuotojai); $i++){ // imame darbuotojus po vieną iš masyvo
            if ($this->darbuotojai[$i]['lyt'] == 'vyr') $sum++; // jeigu vyras, tai +1
        }
        return $sum; // gražiname personalo vyru skaiciu kaip funkcijos rezultatą
    }
}
$objektas = new personalas(); // sukuriame klasės objekto egzempliorių
$objektas->persona('Jonas', 'Jonaitis', 'vyr'); // įdedame persona
$objektas->persona('Petras', 'Petraitis', 'vyr'); // įdedame persona
$objektas->persona('Marija', 'Marijona', 'mot'); // įdedame persona
$objektas->persona('Ona', 'Onaite', 'mot'); // įdedame persona
$objektas->persona('Jonas', 'Jonaitis', 'vyr'); // įdedame persona
echo $objektas->kiekMoteru(); // suskaiciuojame kiek moteru ir parodome
echo '<br>';
echo $objektas->kiekVyru(); // suskaiciuojame kiek vyru ir parodome