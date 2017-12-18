<?php
function srifto_dydis($dydis){
switch ($dydis){
case 'mazas': $kodas='10px';break;
case 'normalus': $kodas='16px';break;
case 'didelis': $kodas='20px';break;
case 'labaidid': $kodas='30px';break;

default: $px= '16px';
}
return $kodas;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Lorem Ipsum<span style="font-size: <?php echo srifto_dydis('mazas')?>">, is simply dummy text of
    </span><span style="font-size: <?php echo srifto_dydis('normalus')?>"> dummy text ever since</span>
    <span style="font-size: <?php echo srifto_dydis('didelis')?>">book. It has </span> <span style="font-size:
<?php echo srifto_dydis('labaidid')?>">unchanged. It was popularised in</span> </p>
<?php
echo '<script>alert("Labytis!!!!");</script>';
?>


</body>
</html>