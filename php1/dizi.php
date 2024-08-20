<?php
$kisi = array();
$kisi[ad] = array("irfan", "selçuk", "hülya");
$kisi[yas] = array("21", "32", "43");
$kisi[okulno] = array("1111", "2222", "3333");
$kisi[sehir] = array("istanbul", "izmir", "ankara");
echo "<pre>";
print_r($kisi);
echo "<br>";
echo $kisi[ad][0] . " isimki kişinin yaşı: ".$kisi[yas][0];
echo "<br>";
echo "<br>";


echo "<pre>";
$kisi2 = array(ad=>array("irfan"=>array(yas=>"41", okulno=>"3214020023", sehir=> "artvin"), "selçuk"=>array(yas=>"32", okulno=>"3214020045", sehir=> "izmir"), "hülya"=>array(yas=>"47", okulno=>"321402433", sehir=> "istanbul")));
print_r($kisi2);
echo "<br>";
echo "<br>";

$kisi3 = array();
$kisi3 = [
    "ad"     =>    "irfan",
    "soyad"  =>    "şimşek",
    "yas"    =>    28,
    "sehir"  =>  "istanbul"
];


echo "<pre>";
print_r($kisi3);
?>