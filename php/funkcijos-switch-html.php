<?php
//dinaminio puslapio dalis
function spalvos_kodas($spalva){
    switch ($spalva){
        case 'raudona': $kodas='red';break;
        case 'geltonas': $kodas='yellow';break;
        case 'tamsus': $kodas='#2222222';break;
        default: $kodas= 'black';
    }
    return $kodas;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>samamarideme.lt</title>
</head>
<body>
<p>Lorem LoremIpsum is <spam style="color:<?php echo spalvos_kodas('raudona')?">simply dummy text</span> of the printing and typesetting industry.
    lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
    a galley of type and scrambled it<span style="color:<?php echo spalvos_kodas('geltonas')?> "> to much to make somethink</spam> to make a type specimen book. It has survived not only five centuries, bu
    t also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 196
    0s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publi
    shing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</p>


</body>
</html>