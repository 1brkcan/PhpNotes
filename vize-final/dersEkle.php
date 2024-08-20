

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .form-control{
            width: 50%;
        }
        .form-floating{
            margin-left: 50px;
        }
        .btn-success{
            margin: 20px 0 0 50px;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Öğrenci Ders Alma Sistemi</a>
        </div>
    </nav>

    <form action="" method="post">
            <div class="form-group">
                <label for="okulNo">Okul No:</label>
                <input type="text" class="form-control" id="okulNo" name="okulNo">
            </div>
            <div class="form-group">
                <label for="adSoyad">Ad Soyad:</label>
                <input type="text" class="form-control" id="adSoyad" name="adSoyad">
            </div>
            <div class="form-group">
                <label for="dersSayisi">Ders Sayısı:</label>
                <input type="number" class="form-control" id="dersSayisi" name="dersSayisi" min="1">
            </div>

            <div id="dersAdiAlanlari" class="form-group">
            </div>

            <button type="button" class="btn btn-primary" onclick="ekleDersAdiAlanlari()">Ders Ekle</button>
            <form action="vizeOrnek.php" method="post">
                <button type="submit" class="btn btn-success" style="margin: 0;">Kaydet</button>
            </form>

    </form>

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
</body>

</html>