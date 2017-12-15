<?php
function writeMsg() {
    echo "Hello world!<br>";
}

writeMsg(); // call the function
writeMsg();

function familyName($fname='nesamone', $lname='Nezinomas') {
    echo "$fname $lname.<br>";
}

familyName('Jonas','Jonaitis');
familyName();
familyName('Antanas','Antanaitis');

$fn='familyname';
call_user_func('familyname','Petras','Petraitis');

//jeigu grazini reiksme,nerodo ekrane
function familyNameRet($fname='nesamone', $lname='Nezinomas') {
    return "$fname $lname.<br>";
}//rodo ekrane
    echo familyNameRet('Jonas','Jonaitis');

 $x= familyNameRet('Jonas','Jonaitis');
echo $x;

$fnc= "familyNameRet";
echo $fnc("Jonas",'Jonaitis');

$fm=function ($fname='nesamone', $lname='Nezinomas') {
    return "$fname $lname.<br>";
};
echo $fm("Jonas",'Jonaitis');
$fm= function($a='',$b=''){
    return 'belekas';
};
echo $fm("Jonas",'Jonaitis');