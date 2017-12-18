<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>

<?php
$asmuo=[
    [
        'vardas'=>'Samanta',
        'pavarde'=>'Griskeviciute',
        'maistas'=>'mesa',
        'lytis'=>'moteris',
    ],
    [
        'vardas'=>'Juozas',
        'pavarde'=>'Kazakevicius',
        'maistas'=>'zuvis',
        'lytis'=>'vyras',
    ],
    [
        'vardas'=>'Odeta',
        'pavarde'=>'Lenartaite',
        'maistas'=>'salotos',
        'lytis'=>'moteris',
    ]
];
function getInfo($zmogus){
    $s='';
    $s .= '<td>'.$zmogus ['vardas'] .'</td>';
    $s .= '<td>'.$zmogus ['pavarde'] .'</td>';
    $s .= '<td>'.$zmogus ['maistas'] .'</td>';
    $s .= '<td>'.$zmogus ['lytis'] .'</td>';
    return $s;
}

?>
<table>
    <tr>
        <th>Nr</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Maistas</th>
        <th>Lytis</th>
    </tr>
    <?php
    $nr=1;
    foreach ($asmuo as $zmogus){
        echo '<tr>';
        echo '<td>' . $nr++ .'</td>';
        echo getInfo($zmogus);
        echo '</tr>';
    }
    ?>

</table>

</body>
</html>