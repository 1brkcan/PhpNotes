<?php

$adsoyad = "irfan şimşek";
$cinsiyet = "Erkek";
$sehir = "İstanbul";
$adres = "avcılar istanbul";

echo $adsoyad;
echo "<br>";
echo "<strong>Cinsiyet:</strong>" . $cinsiyet;

echo "<br>-------<br>";
echo "<strong>Ad Soyad</strong>" . $adsoyad . "<br><strong>Cinsiyet:</strong>" . $cinsiyet . "<br><strong>Şehir</strong>" . $sehir;
echo "<br>-------<br>";

//get ile değerleri alıyoruz
$adsoyad = $_GET["adsoyad"];
$cinsiyet =  $_GET["cinsiyet"];
$sehir =  $_GET["sehir"];
$adres =  $_GET["adres"];

echo "<strong>Ad Soyad: </strong>" . $adsoyad . "<br><strong>Cinsiyet: </strong>" . $cinsiyet . "<br><strong>Şehir: </strong>" . $sehir . "<br><strong>Adres: </strong>" . $adres;
echo "<br>-------<br>";

//post ile değerleri alıyoruz
$adsoyad = $_POST["adsoyad"];
$cinsiyet =  $_POST["cinsiyet"];
$sehir =  $_POST["sehir"];
$adres =  $_POST["adres"];

echo "<strong>Ad Soyad: </strong>" . $adsoyad . "<br><strong>Cinsiyet: </strong>" . $cinsiyet . "<br><strong>Şehir: </strong>" . $sehir . "<br><strong>Adres: </strong>" . $adres;
echo "<br>-------<br>";
?>