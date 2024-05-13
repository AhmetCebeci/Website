<?php
// Form verilerini al
$email = $_POST['email'];
$password = $_POST['password'];

if (($email === "b231210077@sakarya.edu.tr" || $email === "B231210077@sakarya.edu.tr") && ($password === "b231210077" || $password === "B231210077")) {
    // Başarılı giriş, kullanıcıyı karşılama sayfasına yönlendir
    echo "Hoşgeldin b231210077 ";
    header("refresh:2;url=../main/main.html"); // 2 saniye bekleyip main.html'e yönlendir
    exit();
} else {
    // Hatalı giriş, kullanıcıyı login sayfasına geri yönlendir
    echo"Hatalı giriş,lütfen tekrar dene";
    header("refresh:2; url=login.html");
    exit();
}
?>
