<?php
// Eğer veritabanı bağlantı dosyanın adı farklıysa burayı düzelt (örn: baglan.php)
// include('veritabani.php'); 

// Test için şifre kontrolü simülasyonu
if(isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // İŞTE ZAFİYET NOKTASI: Bu satır SQL Injection'a izin verir.
    // Çünkü ' karakterini filtrelemiyor!
    echo "<div style='background:yellow; padding:10px;'>Çalıştırılan Sorgu: SELECT * FROM users WHERE kadi = '$user' AND sifre = '$pass'</div>";

    // Burada normalde veritabanı kontrolü olur. 
    // Ama biz SQL Injection mantığını anlamak için basit bir kontrol ekleyelim:
    if($user == "' OR 1=1 -- " || ($user == "admin" && $pass == "123456")) {
        echo "<h1 style='color:red; background:black; text-align:center;'>BOZKURT SİBER TAY TARAFINDAN HACKLENDİ!</h1>";
        echo "<p align='center'>Sisteme Admin Yetkisiyle Sızıldı.</p>";
    } else {
        echo "<h2 align='center'>Hatalı Giriş!</h2>";
    }
}
?>

<html>
<head><title>Admin Girişi</title></head>
<body style="background:#222; color:white; font-family:sans-serif;">
    <div style="width:300px; margin:100px auto; background:#333; padding:20px; border:1px solid #444;">
        <h2 align="center">Şirket Paneli</h2>
        <form method="POST">
            Kullanıcı Adı: <br><input type="text" name="user" style="width:100%;"><br><br>
            Şifre: <br><input type="password" name="pass" style="width:100%;"><br><br>
            <input type="submit" name="login" value="Giriş Yap" style="width:100%; cursor:pointer;">
        </form>
        <p style="font-size:12px; color:#888;">Not: Bu panel sadece yetkili personel içindir.</p>
    </div>
</body>
</html>
