<?php
date_default_timezone_set('Europe/Istanbul');
$date = date('d.m.Y H:i:s');
if(isset($_POST)){

    $data = json_decode(file_get_contents('php://input'), true);

    $kad = $data['kadi'];
    $sifre = $data['sifre'];

    if($kad=="test" and $sifre== "123"){
        echo "46";

        $dosya= fopen("dosya.txt","a+");
        fwrite($dosya,$date. " tarihinde 46 nuamralı takim giriş yaptı \n");
        fclose($dosya);
    }else{
        echo "basarisiz";
        $dosya= fopen("dosya.txt","w");
        fwrite($dosya,$date. " tarihinde basarisiz giriş denemesi \n");
        fclose($dosya);
    }
}

?>