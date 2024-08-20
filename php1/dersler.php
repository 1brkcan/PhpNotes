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
    <h1>Dersler</h1>      
    <p>BÖTE Bölümündeki açılan dersler aşağıda listelenmiştir.</p>
  </div>
</div>
  
<?php
$dersadi = $_POST["dersadi"];
$ou = $_POST["ou"];
$kredi = $_POST["kredi"];
?>
    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Dersin Adı</th>
        <th>Dersin Öğretim Üyesi</th>
        <th>Kredi</th>
        <th>Düzenle</th>
        <th>Sil</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Web Tabanlı Programlama</td>
        <td>İrfan Şimşek</td>
        <td>4</td>
        <td><button type="button" class="btn btn-warning">Düzenle</button></td>
        <td><button type="button" class="btn btn-danger">Sil</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mobil Programlama</td>
        <td>Hülya Çalışkan</td>
        <td>3</td>
        <td><button type="button" class="btn btn-warning">Düzenle</button></td>
        <td><button type="button" class="btn btn-danger">Sil</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo $dersadi; ?></td>
        <td><?=$ou?></td>
        <td><?=$kredi?></td>
        <td><button type="button" class="btn btn-warning">Düzenle</button></td>
        <td><button type="button" class="btn btn-danger">Sil</button></td>
      </tr>
    </tbody>
  </table>
  </div>
   



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
