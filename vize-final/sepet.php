<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kitap Sipariş Sistemi</a>
        </div>
    </nav>

    
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Kitap Adı</th>
                <th>Kitap Yazarı</th>
                <th>Kitap Fiyatı</th>
            </tr>
        </thead>
        <form action="sepet.php" id="books" method="$_POST">
            <tbody>
                <tr>
                    <td>
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["1"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["2"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["3"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["4"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["5"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["6"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["7"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["8"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["9"]["kitapAdi"] ?></li>
                    </ul>        
                    <ul class="list-group">
                            <li class="list-group-item list-group-item-success" name="kitapadi1"><?php echo $books["10"]["kitapAdi"] ?></li>
                    </ul>        
                            
                        
                    </td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["1"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["2"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["3"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["4"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["5"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["6"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["7"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["8"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["9"]["kitapYazari"] ?></li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["10"]["kitapYazari"] ?></li>
                        </ul>
                            
                        
                    </td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["1"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["2"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["3"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["4"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["5"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["6"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["7"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["8"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["9"]["kitapFiyati"] ?></li>
                            
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success"><?php echo $books["10"]["kitapFiyati"] ?></li>
                            
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["1"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["2"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["3"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["4"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["5"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["6"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["7"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["8"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["9"]?>">Sepete Ekle</button>
                        </ul>
                        <br>
                        <ul>
                            <button type="submit" class="btn btn-success ekle" onclick="<?php echo $books["10"]?>">Sepete Ekle</button>
                        </ul>
                    </td>
                </tr>
            </tbody>
            <button type="submit" class="btn btn-success">Bütün kitapları Ekle</button>
        </form>
</body>
</html>