<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Gönderim Sonucu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-success mb-4">Mesajınız Başarıyla İletildi!</h2>
        <p>Aşağıdaki bilgiler sistemimize kaydedilmiştir:</p>
        
        <table class="table table-bordered bg-white shadow-sm">
            <thead class="thead-dark">
                <tr>
                    <th>Form Alanı</th>
                    <th>Girilen Veri</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Ad Soyad</strong></td>
                    <td><?php echo isset($_POST['adSoyad']) ? htmlspecialchars($_POST['adSoyad']) : '-'; ?></td>
                </tr>
                <tr>
                    <td><strong>E-Posta</strong></td>
                    <td><?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '-'; ?></td>
                </tr>
                <tr>
                    <td><strong>Telefon</strong></td>
                    <td><?php echo isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : '-'; ?></td>
                </tr>
                <tr>
                    <td><strong>Konu</strong></td>
                    <td><?php echo isset($_POST['konu']) ? htmlspecialchars($_POST['konu']) : '-'; ?></td>
                </tr>
                <tr>
                    <td><strong>Öğrenci Durumu</strong></td>
                    <!-- Radio buton tekli seçimdir, hangisi seçildiyse o gelir -->
                    <td><?php echo isset($_POST['ogrenciDurum']) ? htmlspecialchars($_POST['ogrenciDurum']) : 'Seçilmedi'; ?></td>
                </tr>
                <tr>
                    <td><strong>Mesaj</strong></td>
                    <td><?php echo isset($_POST['mesaj']) && !empty($_POST['mesaj']) ? htmlspecialchars($_POST['mesaj']) : 'Mesaj girilmedi'; ?></td>
                </tr>
                <tr>
                    <td><strong>Onay Durumu</strong></td>
                    <td><?php echo isset($_POST['onay']) ? 'Kabul Edildi' : 'Edilmedi'; ?></td>
                </tr>
            </tbody>
        </table>
        
        <a href="websayfam2.html" class="btn btn-primary mt-3">Ana Sayfaya Dön</a>
    </div>
</body>
</html>