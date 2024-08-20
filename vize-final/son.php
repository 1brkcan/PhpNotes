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
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Öğrenci Ders Alma Sistemi</a>
        </div>
    </nav>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
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

        
    <?php else: ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="okulNo">Okul No:</label>
                <input type="text" class="form-control" id="okulNo" name="okulNo" required>
            </div>
            <div class="form-group">
                <label for="adSoyad">Ad Soyad:</label>
                <input type="text" class="form-control" id="adSoyad" name="adSoyad" required>
            </div>
            <div class="form-group">
                <label for="dersSayisi">Ders Sayısı:</label>
                <input type="number" class="form-control" id="dersSayisi" name="dersSayisi" min="1" required>
            </div>

            <div id="dersAdiAlanlari" class="form-group">
            </div>

            <button type="button" class="btn btn-primary ekle" onclick="ekleDersAdiAlanlari()">Ders Ekle</button>
            <button type="submit" class="btn btn-success">Kaydet</button>
        </form>
    <?php endif; ?>

    

</div>

<script>
    function ekleDersAdiAlanlari() {
        var dersSayisi = document.getElementById("dersSayisi").value;
        var dersAdiAlanlari = document.getElementById("dersAdiAlanlari");
        
        dersAdiAlanlari.innerHTML = "";

        for (var i = 1; i <= dersSayisi; i++) {
            var div = document.createElement("div");
            div.className = "form-group";
            var label = document.createElement("label");
            label.htmlFor = "dersAdi" + i;
            label.textContent = "Ders " + i + " Adı:";
            var input = document.createElement("input");
            input.type = "text";
            input.className = "form-control";
            input.id = "dersAdi" + i;
            input.name = "dersAdi" + i;
            input.required = true;

            div.appendChild(label);
            div.appendChild(input);
            dersAdiAlanlari.appendChild(div);

            
        }
    }
</script>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
