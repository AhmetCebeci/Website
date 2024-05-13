<?
// Form verilerini al
$email = $_POST['email'];
$password = $_POST['password'];

if (($email === "b231210077@sakarya.edu.tr"||$email === "B231210077@sakarya.edu.tr" )&& ($password === "b231210077"||$password === "B231210077")) {
    // Başarılı giriş, kullanıcıyı karşılama sayfasına yönlendir
    header("Location: main/main.html");
    exit();
} else {
    // Hatalı giriş, kullanıcıyı login sayfasına geri yönlendir
    header("Location: login.html");
    exit();
}
?>