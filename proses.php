<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // JANGAN SIMPAN DATA SEPERTI INI DI DUNIA NYATA
    // Ini hanya untuk melihat apakah data berhasil terkirim ke server
    echo "Sistem menerima input:<br>";
    echo "Username: " . htmlspecialchars($user) . "<br>";
    echo "Password: (Data tersaring untuk keamanan)";
    
    // Di aplikasi asli, di sini Anda akan mengecek ke Database
} else {
    header("Location: index.php");
}
?>
