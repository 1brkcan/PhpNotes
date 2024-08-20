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
    <h1>İletişim</h1>      
    <p>Ders hakkında sorularınız var ise formu doldurabilirsiniz.</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-12">

<form action="post.php" method = "post">
  <div class="form-group">
    <label for="adsoyad">Ad Soyad</label>
    <input type="input" class="form-control" id="adsoyad" name = "adsoyad">
  </div>

  <div class="form-group">
  <div class="checkbox">
  <label class="checkbox-inline"><input type="radio" value="Kadın" name = "cinsiyet"> Kadın</label>
<label class="checkbox-inline"><input type="radio" value="Erkek" name = "cinsiyet"> Erkek</label>
</div>
</div>

<div class="form-group">
  <label for="sel1">Şehir</label>
  <select class="form-control" id="sehir" name = "sehir">
  <option> Seçiniz!</option>
  <option value = "İstanbul"> İstanbul</option>
    <option value = "Ankara">Ankara</option>
    <option value = "İzmir">İzmir</option>
    <option value = "Mersin">Mersin</option>
  </select>
</div>

<div class="form-group">
  <label for="comment">Adres</label>
  <textarea class="form-control" rows="5" id="adres" name = "adres"></textarea>
</div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>

</div><br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
