<?php
date_default_timezone_set('Europe/Istanbul');
$date = date('d.m.Y H:i:s');
if(isset($_POST)){

    $data = json_decode(file_get_contents('php://input'), true);


    $dosya= fopen("telemetri.txt","r+");



    @$veri = '
    "takim_numarasi": '.$data[takim_numarasi].',
        "IHA_enlem": '.$data[IHA_enlem].',
        "IHA_boylam": '.$data[IHA_boylam].',
        "IHA_irtifa": '.$data[IHA_irtifa].',
        "IHA_dikilme": '.$data[IHA_dikilme].',
        "IHA_yatis": '.$data[IHA_yatis].',
        "IHA_yonelme": '.$data[IHA_yonelme].',
        "IHA_hiz": '.$data[IHA_hiz].',
        "IHA_batarya": '.$data[IHA_batarya].',
        "IHA_otonom": '.$data[IHA_otonom].',
        "IHA_kilitlenme": '.$data[IHA_kilitlenme].',
        "Hedef_merkez_X": '.$data[Hedef_merkez_X].',
        "Hedef_merkez_Y": '.$data[Hedef_merkez_Y].',
        "Hedef_genislik": '.$data[Hedef_genislik].',
        "Hedef_yukseklik": '.$data[Hedef_yukseklik].',
        "GPSSaati": '.$data[GPSSaati];


    echo $veri;
    fwrite($dosya,$date. " tarihinde ".$veri." verisi geldi \n");
    fclose($dosya);

}

?>