<?
class dersler {
    public $derskodu;
    public $dersadi;
    public $dersteori;
    public $dersuyg;
    public $derskredi;
    public $dersdetay;
    public $donem;
    public $ogretimelemani;

    function ekle($derskodu,$dersadi,$dersteori,$dersuyg,$derskredi,$dersdetay,$donem,$ogretimelemani) 
    {
        if($ogretimelemani == 1) {
            $ogretimelemani = "İrfan Şimşek";
        }
        else if($ogretimelemani == 2) {
            $ogretimelemani = "Sinan Hopcan";
        }
        else if($ogretimelemani == 3) {
            $ogretimelemani = "Selçuk Hünerli";
        }
        else {
            $ogretimelemani = "Seçim yapılmamıştır";
        }
        echo "<strong>Ders Kodu:</strong>".$derskodu."<br>";
        echo "<strong>Ders Adı:</strong>".$dersadi."<br>";
        echo "<strong>Teori:</strong>".$dersteori."<br>";
        echo "<strong>Uygulama:</strong>".$dersuyg."<br>";
        echo "<strong>Kredi:</strong>".$derskredi."<br>";
        echo "<strong>Ders Detay:</strong>".$dersdetay."<br>";
        echo "<strong>Dönem:</strong>".$donem.". Dönem<br>";
        echo "<strong>Öğretim Elemanı:</strong>".$ogretimelemani;

    }

    function duzenle() 
    {
        echo "düzenle kendiliğinden çalışabiliyor :)";

    }

    function sil() 
    {


    }

    function listele()
    {


    }
    function detay() 
    {


    }
}
?>