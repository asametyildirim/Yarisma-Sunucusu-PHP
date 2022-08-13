<?php

date_default_timezone_set('Europe/Istanbul');
$date = new DateTime();
$gun = (int)date('d');
$saat = (int)date('H');
$dakika = (int)date('i');
$saniye = (int)date('s');
$milisaniye = $date->format("v");


//$milisaniye = (int)floor(microtime(true) * 1000);

echo '   {
            "gun": '.$gun.',
            "saat": '.$saat.',
            "dakika": '.$dakika.',
            "saniye": '.$saniye.',
            "milisaniye": '.$milisaniye.'
        }';

date_default_timezone_set('Europe/Istanbul');
$date = date('d.m.Y H:i:s');

$dosya= fopen("dosya.txt","a+");
fwrite($dosya,$date. " tarihinde saat çekildi: ".$milisaniye."\n");
fclose($dosya);

?>
