<?php
$car=false;
if(isset ($_POST['update-form'] )){
    $auto=new auto();
    $car=$auto->get($_POST['update-form']);
