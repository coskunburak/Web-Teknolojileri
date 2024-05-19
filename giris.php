<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['sifre'];

    // E-posta kontrolü
    if (empty($email) || empty($password)) {
        echo "Lütfen tüm alanları doldurun.";
        echo "<p><a href='login.html'>&lt;GERİ DÖN&gt;</a></p>";
        exit();
    }

    // E-posta formatı kontrolü
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Geçersiz e-posta formatı.";
        echo "<p><a href='login.html'>&lt;GERİ DÖN&gt;</a></p>";
        exit();
    }

    // Kullanıcı adı ve şifre kontrolü
    if ($email == "b231210351@sakarya.edu.tr" && $password == "Burak:31882615464") {
        $message = "HoşGeldin $email --> Tamam tuşuna basınca ana sayfaya yönlendirileceksiniz...";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Refresh: 0.1; url=indexBootstrap.html"); // Yönlendirme yapılıyor
        exit();
    } else {
        echo "E-posta veya şifre hatalı.";
        echo "<p><a href='login.html'>&lt;GERİ DÖN&gt;</a></p>";
        exit();
    }
} else {
    echo "Lütfen formu kullanarak giriş yapın.";
}
?>
