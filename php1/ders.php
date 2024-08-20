<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOTE</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $("#dersuyg").blur(function(){
    var dersteori=Number($("#dersteori").val());
    var dersuyg=Number($("#dersuyg").val())/2;
    var kredi=dersteori+dersuyg;
    $("#derskredi").val(kredi);
  });
});
</script>

</head>
<body>
<?
require "nav.php";
require "ders_class.php";

if(empty($_GET["s"]))
{
  $url = "";
}
else {
  $url = $_GET["s"];
}

switch ($url) 
{
  case "ekle":
    ?>
    <div class="container">
      <?
      if(empty($_POST["derskodu"])) {
      ?>
<form action="" method="post">
<div class="form-group row">
  <div class="col-xs-2">
    <label for="derskodu">Ders Kodu</label>
    <input class="form-control" id="derskodu" type="text" name="derskodu">
  </div>
  </div>
  <div class="form-group">
    <label for="dersadi">Ders Adı</label>
    <input type="text" class="form-control" id="dersadi" name="dersadi">
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="dersteori">Teori</label>
    <input class="form-control" id="dersteori" type="number" name="dersteori">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="dersuyg">Uygulama</label>
    <input class="form-control" id="dersuyg" type="number" name="dersuyg">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="derskredi">Kredi</label>
    <input class="form-control" id="derskredi" type="number" readonly name="derskredi">
  </div>
  </div>
  <div class="form-group">
    <label for="dersdetay">Ders Detay</label>
    <textarea class="form-control" id="dersdetay" rows="3" name="dersdetay"></textarea>
  </div>
  <div class="form-group row">
    <label for="donem">Dönem</label>
    <select id="donem" name="donem" class="form-control">
        <option value="0">Seçiniz!</option>
        <option value="1">1. Dönem</option>
        <option value="2">2. Dönem</option>
        <option value="3">3. Dönem</option>
        <option value="4">4. Dönem</option>
        <option value="5">5. Dönem</option>
        <option value="6">6. Dönem</option>
        <option value="7">7. Dönem</option>
        <option value="8">8. Dönem</option>
    </select>
</div>
<div class="form-group row">
  <label for="ogretimelemani">Öğretim Elemanı</label>
    <select id="ogretimelemani" name="ogretimelemani" class="form-control">
        <option value="0">Seçiniz!</option>
        <option value="1">İrfan Şimşek</option>
        <option value="2">Sinan Hopcan</option>
        <option value="3">Selçuk Hünerli</option>
    </select>
</div>
  <button type="submit" class="btn btn-success" name="submit">Kaydet</button>
</form>
</div>
    <?
      }
      else {

        $dersadi = $_POST["dersadi"];
        $dersteori = $_POST["dersteori"];
        $dersuyg = $_POST["dersuyg"];
        $derskredi = $_POST["derskredi"];
        $dersdetay = $_POST["dersdetay"];
        $donem = $_POST["donem"];
        $ogretimelemani = $_POST["ogretimelemani"];

         $ders = new dersler();
         $ders->ekle($_POST["derskodu"],$dersadi,$dersteori,$dersuyg,$derskredi,$dersdetay,$donem,$ogretimelemani);

?>
<br>
<a href="ders.php?s=ekle"><button type="button" class="btn btn-primary">Ders Ekle</button></a>
<a href="ders.php"><button type="button" class="btn btn-info">Ders Listesi</button></a>
<?
      }
    break;
  case "duzenle":
    $ders = new dersler();
    $ders->duzenle();
    
    break;
  case "sil":

    break;
  default:
  ?>
<div class="container">
  <h2>1. Yarıyıl</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Ders Adı</th>
        <th>Öğretim Elemanı</th>
        <th>Teori</th>
        <th>Uygulama</th>
        <th>Kredi</th>
        <th>Detay</th>
        <th>Düzenle</th>
        <th>Sil</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Web Programlama</td>
        <td>İrfan Şimşek</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr> 
      <tr>
        <td>Java Programlama</td>
        <td>Elif Polat Hopcan</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>     
      <tr class="danger">
        <td>Mobil Programlama</td>
        <td>Selçuk Hünerli</td>
        <td>3</td>
        <td>2</td>
        <td>4</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>
      <tr class="warning">
        <td>Veritabanı Yönetim Sistemleri</td>
        <td>Sinan Hopcan</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>
    </tbody>
  </table>
  <h2>2. Yarıyıl</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Ders Adı</th>
        <th>Öğretim Elemanı</th>
        <th>Teori</th>
        <th>Uygulama</th>
        <th>Kredi</th>
        <th>Detay</th>
        <th>Düzenle</th>
        <th>Sil</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Web Programlama</td>
        <td>İrfan Şimşek</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>      
      <tr class="danger">
        <td>Mobil Programlama</td>
        <td>Selçuk Hünerli</td>
        <td>3</td>
        <td>2</td>
        <td>4</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>
      <tr class="warning">
        <td>Veritabanı Yönetim Sistemleri</td>
        <td>Sinan Hopcan</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>
    </tbody>
  </table>
  <h2>3. Yarıyıl</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Ders Adı</th>
        <th>Öğretim Elemanı</th>
        <th>Teori</th>
        <th>Uygulama</th>
        <th>Kredi</th>
        <th>Detay</th>
        <th>Düzenle</th>
        <th>Sil</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Web Programlama</td>
        <td>İrfan Şimşek</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>      
      <tr class="danger">
        <td>Mobil Programlama</td>
        <td>Selçuk Hünerli</td>
        <td>3</td>
        <td>2</td>
        <td>4</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>
      <tr class="warning">
        <td>Veritabanı Yönetim Sistemleri</td>
        <td>Sinan Hopcan</td>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td><a href="ders.php?s=detay"><span class="glyphicon glyphicon-info-sign"></span></p></a></td>
        <td><a href="ders.php?s=duzenle"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="ders.php?s=sil"><span class="glyphicon glyphicon-trash"></span></p></a></td>
      </tr>
    </tbody>
  </table>
</div>
<? } ?>
</body>
</html>