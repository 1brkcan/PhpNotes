<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitap Otomasyon</title>
    <style>
        form {
            background-color: yellow;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70vh;
        }
        
    </style>
</head>
<body>

<?php
$kitaplar = [
    ["Kitap 1", "Yazar 1", 29.99, "Yayın Yılı 1"],
    ["Kitap 2", "Yazar 2", 19.99, "Yayın Yılı 2"],
    ["Kitap 3", "Yazar 3", 24.99, "Yayın Yılı 3"],
    ["Kitap 4", "Yazar 4", 14.99, "Yayın Yılı 4"],
    ["Kitap 5", "Yazar 5", 34.99, "Yayın Yılı 5"],
    ["Kitap 6", "Yazar 6", 39.99, "Yayın Yılı 6"],
    ["Kitap 7", "Yazar 7", 22.99, "Yayın Yılı 7"],
    ["Kitap 8", "Yazar 8", 17.99, "Yayın Yılı 8"],
    ["Kitap 9", "Yazar 9", 27.99, "Yayın Yılı 9"],
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sepeteEkle"])) {
        $secilenKitaplar = isset($_POST["kitaplar"]) ? $_POST["kitaplar"] : [];

        if (!empty($secilenKitaplar)) {
            echo "<h2>Sepete Eklenen Kitaplar</h2>";
            echo "<ul>";
            $toplamTutar = 0;
            foreach ($secilenKitaplar as $index) {
                echo "<li>{$kitaplar[$index][0]} - {$kitaplar[$index][2]} TL</li>";
                $toplamTutar += $kitaplar[$index][2];
            }
            echo "</ul>";

            echo "<p>Toplam Tutar: {$toplamTutar} TL</p>";

            echo "<form method='post'>";
            echo "<label>Ödeme Miktarı: </label>";
            echo "<input type='number' name='odemeMiktari' step='0.01' required>";
            echo "<input type='hidden' name='toplamTutar' value='{$toplamTutar}'>";
            echo "<button type='submit' name='odemeYap'>Ödeme Yap</button>";
            echo "</form>";
        } else {
            echo "<p>Sepete hiçbir kitap eklenmedi.</p>";
        }
    }   elseif (isset($_POST["odemeYap"])) {
        $odemeMiktari = isset($_POST["odemeMiktari"]) ? $_POST["odemeMiktari"] : 0;
        $toplamTutar = isset($_POST["toplamTutar"]) ? $_POST["toplamTutar"] : 0;

        if ($odemeMiktari >= $toplamTutar) {
            $paraUstu = $odemeMiktari - $toplamTutar;
            echo "<p>Ödeme Başarılı! Para Üstü: {$paraUstu} TL</p>";
        } else {
            echo "<p>Ödeme Başarısız! Yetersiz ödeme yapıldı.</p>";
        }
    }
}
?>

<h2 class="kitap">Kitap Listesi</h2>
<form method="post">
    <table border="1">
    <tr>
    <th>Kitap Adı</th>
    <th>Yazar</th>
    <th>Fiyat</th>
    <th>Yayın Yılı</th>
    <th>Sepete Ekle</th>
</tr>
<?php foreach ($kitaplar as $index => $kitap): ?>
    <tr>
        <td><?= $kitap[0] ?></td>
        <td><?= $kitap[1] ?></td>
        <td><?= $kitap[2] ?> TL</td>
        <td><?= $kitap[3] ?></td>
        <td><input type="checkbox" name="kitaplar[]" value="<?= $index ?>"></td>
    </tr>
<?php endforeach; ?>
    </table>
    <br>
    <button type="submit" name="sepeteEkle">Sepete Ekle</button>
</form>

</body>
</html>