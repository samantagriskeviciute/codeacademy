<?php
/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis. Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km). Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas). Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį. Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/
class automobilis {
    public $automobiliai;
    function sarasas($gamintojas, $modelis, $kuras, $kurosanaudos){
        if (!isset($this->automobiliai)) $this->automobiliai = [];
        $this->automobiliai[] = [
            'mo' => $modelis,
            'ka' => $kuras,
            'sa' => $kurosanaudos
        ];
    }
    function kurovidurkisDyzelis(){
        $sum = 0;
        $kiek = 0;
        for ($i = 0; $i < count($this->automobiliai); $i++) {
            if ($this->automobiliai[$i]['ka'] == 'dyzelis') {
                $sum = $sum + $this->automobiliai[$i]['sa'];
                $kiek = $kiek + 1;
            }

        }
        return $sum / $kiek; // gražiname
    }
        function kurovidurkisBenzinas(){
            $sum = 0;
            $kiek=0;
            for ($i=0; $i<count($this->automobiliai); $i++){
                if ($this->automobiliai[$i]['ka']=='benzinas' ) {
                    $sum = $sum + $this->automobiliai[$i]['sa'];
                    $kiek = $kiek + 1;
                }

            }
            return $sum / $kiek; // gražiname
        }

    }

$objektas = new automobilis(); // sukuriame klasės objekto egzempliorių
$objektas->sarasas('bmw', '320', 'benzinas', 300);
$objektas->sarasas('honda', 'accord','dyzelis' , 350);
$objektas->sarasas('audi', '100', 'benzinas', 400);
$objektas->sarasas('lada', 'super', 'dyzelis', 1000);
echo $objektas->kurovidurkisDyzelis(); // surandame kuro sanaudos dyzelio ir benzino ir ją parodome
echo '<br>';
echo $objektas->kurovidurkisBenzinas();