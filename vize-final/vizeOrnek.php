
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CALISMA | 1.Sayfa </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    
    <form action="dersEkle.php" method="post">
        <button type="submit" class="btn btn-success">Ders Ekle</button>
    </form>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Okul No</th>
                <th>Ad Soyad</th>
                <th>Alınan Dersler</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $_POST["okulNo"] ?></td>
                <td> <?= $_POST["adSoyad"] ?></td>
                <td>
                    <ul class="list-group">
                    <?php for ($i = 1; $i <= $_POST["dersSayisi"]; $i++): ?>
                        <li class="list-group-item list-group-item-success"><?= $_POST["dersAdi$i"] ?></li>
                    <?php endfor; ?>
                        
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>


</body>

</html>