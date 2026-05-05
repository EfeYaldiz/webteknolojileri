<?php
// Formdan gelen verileri çekiyoruz
$kullanici = $_POST['kullaniciAdi'];
$sifre = $_POST['sifre'];

// Sistemin kabul edeceği doğru bilgiler
$dogruMail = "b251210403@sakarya.edu.tr";
$dogruSifre = "b251210403";

// Gelen bilgiler doğru mu diye kontrol ediliyor
if ($kullanici === $dogruMail && $sifre === $dogruSifre) {
    
    // E-posta adresini '@' işaretinden bölüp ilk kısmı (öğrenci numarasını) alınıyor
    $ogrenciNo = explode('@', $kullanici)[0];
    
    // Başarılı giriş mesajı
    echo "<!DOCTYPE html>";
    echo "<html lang='tr'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Giriş Başarılı</title>";
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
    echo "</head>";
    echo "<body class='bg-light'>";
    echo "<div class='container mt-5 text-center'>";
    echo "<h1 class='text-success'>Hoşgeldiniz " . htmlspecialchars($ogrenciNo) . "</h1>";
    echo "<p class='lead'>Başarıyla giriş yaptınız.</p>";
    echo "<a href='websayfam2.html' class='btn btn-primary mt-4'>Ana Sayfaya Dön</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";

} else {
    // Bilgiler yanlışsa hiçbir şey yapmadan direkt login.html'e geri gönderiyoruz
    header("Location: login.html?durum=hata");;
    exit(); // Kodun devamının çalışmasını kesin olarak durdur
}
?>