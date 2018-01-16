<?php
/*
Sukurkite PHP skriptą, kuriame aprašykite klasę loto, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas generate(), kuris sugeneruoja 5 x 5 atsitiktinių skaičių dvimatį masyvą (min skaičius = 1, max skaičius = 75). Sukurkite metodą get(),kuris išveda sugeneruotą masyvą 5 x 5 HTML lentele. Pademonstruokite veikimą.
*/
class loto {
    public $table = [];
    function generate(){
        for ($i=0; $i<5; $i++){
            for ($j=0; $j<5; $j++){
                $this->table[$i][$j] = rand(1, 75);
            }
        }
    }
    function get(){
        echo '<table>';
        for ($i=0; $i<count($this->table); $i++){
            echo '<tr>';
            for ($j=0; $j<count($this->table[$i]); $j++){
                echo '<td>' . $this->table[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
$o = new loto();
$o->generate();
$o->get();


//vienmatis masyvas is vardu
$m =["samanta", "gitana", "karolis", "gytis",'vytautas'];
//masyvo elemento pradinis indeksas nulis
$i=0;

foreach ($m as $raides) {//foreach ciklas
$m[$i++]=strtoupper($raides);//pakeisti teksta i did.raides prisiejant indeksa +1
//forech($m as $t)$m($m[$i++]=strtoupper($t);
    }

var_dump($m);//isvedimas i ekrana

//$m=['a'=>1, "b"=>2];
//foreach ($s as $key=>$value);


