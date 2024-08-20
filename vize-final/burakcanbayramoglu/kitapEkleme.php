<?php

ob_start();
session_start();




?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitap Sepeti</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: yellow;
            color: black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Kitap Ekle</h2>

    <form id="kitapForm">
        <label for="kitapAdi">Kitap Adı:</label>
        <input type="text" id="kitapAdi" name="kitapAdi" required>

        <label for="yazar">Yazar:</label>
        <input type="text" id="Kitapyazar" name="KitapYazari" required>

        <label for="fiyat">Fiyat:</label>
        <input type="number" id="Kitapfiyat" name="Kitapfiyati" step="0.01" required>

        <label for="yayinYili">Yayın Yılı:</label>
        <input type="text" id="KitapyayinYili" name="KitapYayinYili" required>

        <button type="button" onclick="kitapEkle()">Kitap Ekle</button>
    </form>

    <h2>Sepet</h2>

    <table id="sepet">
        <thead>
            <tr>
                <th>Kitap Adı</th>
                <th>Yazar</th>
                <th>Fiyat</th>
                <th>Yayın Yılı</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sepet içeriği -->
        </tbody>
    </table>
        <br>
    
    <button onclick="navigateTo('kitapOdeme.php')">Sepet Listesi</button>
    <button onclick="navigateTo('KitapOdeme.php')">Kitap Listesi ve Satın Alım</button>

    <script>
        function kitapEkle() {
            var kitapAdi = document.getElementById("kitapAdi").value;
            var yazar = document.getElementById("Kitapyazar").value;
            var fiyat = document.getElementById("Kitapfiyat").value;
            var yayinYili = document.getElementById("KitapyayinYili").value; 

            var sepetTablosu = document.getElementById("sepet").getElementsByTagName('tbody')[0];
            var row = sepetTablosu.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3); 
            cell1.innerHTML = kitapAdi;
            cell2.innerHTML = yazar;
            cell3.innerHTML = "$" + fiyat;
            cell4.innerHTML = yayinYili; 

            // Formu temizle
            document.getElementById("kitapAdi").value = "";
            document.getElementById("Kitapyazar").value = "";
            document.getElementById("Kitapfiyat").value = "";
            document.getElementById("KitapyayinYili").value = ""; 
        }

        function navigateTo(page) {
        window.location.href = page;
    }
    </script>
</body>
</html>