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
include("conn.php");
?>



<div class="jumbotron">
  <div class="container text-center">
    <h1>Ders Ekle</h1>      
    <p>Yeni ders ekleme formu</p>
  </div>
</div>
  

<form action="" method = "post">
  <div class="form-group">
    <label for="ders_kodu">Dersin Kodu</label>
    <input type="input" class="form-control" id="ders_kodu" name = "ders_kodu">
  </div>
  <div class="form-group">
    <label for="ders_adi">Dersin Adı</label>
    <input type="input" class="form-control" id="ders_adi" name = "ders_adi">
  </div>

<div class="form-group">
  <label for="ou_id">Öğretim Üyesi</label>
  <select class="form-control" id="ou_id" name = "ou_id">
  <option> Seçiniz!</option>

 

  <?php
  
    $query_ou = $db->query("SELECT * FROM ogretim_uyesi ORDER BY ad_soyad ASC", PDO::FETCH_ASSOC);
if ( $query_ou->rowCount() ){
     foreach( $query_ou as $row ){
          ?>
 <option value = "<?=$row["id"]?>"> <?=$row["ad_soyad"]?></option>
          
          <?php
     }
}
  ?>

  </select>
</div>

<div class="form-group">
    <label for="kredi">Dersin Kredisi</label>
    <input type="input" class="form-control" id="kredi" name = "kredi">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

<?php

$ders_kodu = $_POST["ders_kodu"];
$ders_adi = $_POST["ders_adi"];
$ou_id = $_POST["ou_id"];
$kredi = $_POST["kredi"];

$query = $db->prepare("INSERT INTO ders SET
ders_kodu = ?,
ders_adi = ?,
ou_id = ?,
kredi = ?");

$insert = $query->execute(array($ders_kodu,$ders_adi,$ou_id,$kredi));

if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}

?>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
