<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            overflow: hidden;
            
           
        }
        .btn{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70vh;
            

        }
        button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            
        }
    </style>
</head>
<body>
    <header>
        <h1 style="text-align: center;">Ana Sayfa</h1>
    </header>
    <div class="btn">
        <button onclick="navigateTo('kitapEkleme.php')">Kitap Ekle</button>
        <button onclick="navigateTo('kitapOdeme.php')">Sepet Listesi</button>
    </div>
    


<script>
    function navigateTo(page) {
        window.location.href = page;
    }
</script>

</body>
</html>