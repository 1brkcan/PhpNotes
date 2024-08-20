<!DOCTYPE html>
<html lang="en">
<head>
  <title>BÖTE | Web Programlama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<?php
include("nav.php");
?>



<div class="jumbotron">
  <div class="container text-center">
    <h1>Not Girişi</h1>      
    <p>Sınav notları giriş formu</p>
  </div>
</div>
  
<div class="container">
<form action="" method = "post">
<div class="form-group">
  <label for="ders">Dersin Adı</label>
  <select class="form-control" id="ders" name = "ders">
  <option> Seçiniz!</option>
  <option value = "Web Tabanlı Programlama"> Web Tabanlı Programlama</option>
    <option value = "Mobil Programlama">Mobil Programlama</option>
  </select>
</div>
<div class="form-group">
  <label for="ogrenci">Öğrenci Adı</label>
  <select class="form-control" id="ogrenci" name = "ogrenci">
  <option> Seçiniz!</option>
  <option value = "Defne Şimşek"> Defne Şimşek</option>
    <option value = "Ege Hünerli">Ege Hünerli</option>
    <option value = "Mert Çalışkan">Mert Çalışkan</option>
  </select>
</div>
<div class="form-group">
  <label for="sinavtipi">Sınav Tipi</label>
  <select class="form-control" id="sinavtipi" name = "sinavtipi">
  <option> Seçiniz!</option>
  <option value = "Vize"> Vize</option>
    <option value = "Final">Final</option>
    <option value = "Bütünleme">Bütünleme</option>
  </select>
</div>  
<div class="form-group">
    <label for="sinavnotu">Sınav Notu</label>
    <input type="input" class="form-control" id="sinavnotu" name = "sinavnotu">
  </div>

  <button type="submit" class="btn btn-default">Kaydet</button>
</form> 

<?php

$ders = $_POST["ders"];
$ogrenci = $_POST["ogrenci"];
$sinavtipi = $_POST["sinavtipi"];
$sinavnotu = $_POST["sinavnotu"];
echo  $ders . "<br>" . $ogrenci . "<br>" . $sinavtipi . "<br>" . $sinavnotu;
?>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
