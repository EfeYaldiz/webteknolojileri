<?php
$kullanici = $_POST['kullaniciAdi'];
$sifre = $_POST['sifre'];
$dogruMail = "b251210403@sakarya.edu.tr";
$dogruSifre = "b251210403";

if ($kullanici === $dogruMail && $sifre === $dogruSifre) {
    $ogrenciNo = explode('@', $kullanici)[0];
    
    echo "<!DOCTYPE html><html lang='tr'><head><meta charset='UTF-8'><title>Giriş Başarılı</title>";
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'></head>";
    echo "<body class='bg-light'><div class='container mt-5 text-center'>";
    echo "<h1 class='text-success'>Hoşgeldiniz " . htmlspecialchars($ogrenciNo) . "</h1>";
    echo "<p class='lead'>Başarıyla giriş yaptınız.</p>";
    echo "<a href='index.html' class='btn btn-primary mt-4'>Ana Sayfaya Dön</a>";
    
    echo "<script>localStorage.setItem('isLogin', 'true');</script>";
    
    echo "</div></body></html>";
} else {
    header("Location: login.html?durum=hata");
    exit(); 
}
?>