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
    <h1>Giriş</h1>      
    <p>Sistemi kullanabilmeniz için lütfen kullanıcı adı ve şifrenizi yazınız.</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-12">

    <form action = "" method = "post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name = "email">
  </div>
  <div class="form-group">
    <label for="pwd">Şifre:</label>
    <input type="password" class="form-control" id="pwd" name = "pwd">
  </div>

  <button type="submit" class="btn btn-default">Giriş</button>
</form>
</div>
</div>

</div><br><br>

<?php
$email = $_POST["email"];
$pwd = $_POST["pwd"];

echo $email . "<br>" . $pwd  . "<br>";

if($email == "irfan@iuc.edu.tr" && $pwd == "1234") {

   ?>
<div class="alert alert-success">
  <strong>Başarılı!</strong> Kullanıcı adı ve şifre doğru.
</div>
   <?php
}
else {
    ?>
    <div class="alert alert-danger">
      <strong>Hata!</strong> Kullanıcı adı veya şifre hatalı.
    </div>
       <?php
}
?>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
