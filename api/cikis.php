<?php
date_default_timezone_set('Europe/Istanbul');
$date = date('d.m.Y H:i:s');

$dosya= fopen("dosya.txt","a+");
fwrite($dosya,$date. " tarihinde cikis yapildi \n" );
fclose($dosya);

?>