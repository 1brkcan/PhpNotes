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
<?php
$sayfa = $_GET["sayfa"];
switch($sayfa) {

    case "form":

    ?>

<form action="?sayfa=tablo&sayi=<?=$_POST["sayi"]?>" method = "post">
<?php
    for($i=1;$i<=$_POST["sayi"];$i++) {
?>

<div class="form-group">
<label><?=$i?>. Kişi | </label>
<label for="ders<?=$i?>">Dersin Adı</label>
  <select class="form-control" id="ders<?=$i?>" name = "ders<?=$i?>">
  <option> Seçiniz!</option>
  <option value = "Web Tabanlı Programlama"> Web Tabanlı Programlama</option>
    <option value = "Mobil Programlama">Mobil Programlama</option>
  </select>
</div>
<div class="form-group">
  <label for="ogrenci<?=$i?>">Öğrenci Adı</label>
  <select class="form-control" id="ogrenci<?=$i?>" name = "ogrenci<?=$i?>">
  <option> Seçiniz!</option>
  <option value = "Defne Şimşek"> Defne Şimşek</option>
    <option value = "Ege Hünerli">Ege Hünerli</option>
    <option value = "Mert Çalışkan">Mert Çalışkan</option>
  </select>
</div>
<div class="form-group">
  <label for="sinavtipi<?=$i?>">Sınav Tipi</label>
  <select class="form-control" id="sinavtipi<?=$i?>" name = "sinavtipi<?=$i?>">
  <option> Seçiniz!</option>
  <option value = "Vize"> Vize</option>
    <option value = "Final">Final</option>
    <option value = "Bütünleme">Bütünleme</option>
  </select>
</div>  
<div class="form-group">
    <label for="sinavnotu<?=$i?>">Sınav Notu</label>
    <input type="input" class="form-control" id="sinavnotu<?=$i?>" name = "sinavnotu<?=$i?>">
  </div>
<?php
    }
?>
  <button type="submit" class="btn btn-default">Kaydet</button>
</form> 

<?php

    break;


    case "tablo":
?>

<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Dersin </th>
        <th>Öğrenci</th>
        <th>Sınav</th>
        <th>Sınav Notu</th>
      </tr>
    </thead>
    <tbody>

    <?php
for($j=1;$j<=$_GET["sayi"];$j++) {
    $sinavnotu = $_POST["sinavnotu".$j];
    $ders = $_POST["ders".$j];
    $ogrenci = $_POST["ogrenci".$j];
    $sinavtipi = $_POST["sinavtipi".$j];



?>


      <tr>
        <td><?=$j?></td>
        <td><?=$ders?></td>
        <td><?=$ogrenci?></td>
        <td><?=$sinavtipi?></td>
        <td><?=$sinavnotu?></td>
      </tr>
  
  <?php
  }
?>
  </tbody>
  </table>
  </div>

<?php


        break;


        default:

?>

<form action="?sayfa=form" method = "post" class="form-inline">
<div class="form-group">
 
<div class="form-group">
    <label for="sayi">Kişi Sayısı</label>
    <input type="input" class="form-control" id="sayi" name = "sayi" value = "<?=$_POST["sayi"]?><?=$_GET["sayi"]?>">
  </div>
  <button type="submit" class="btn btn-default">Not Girişi</button>
</form>

<?php
}

?>
  


</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
