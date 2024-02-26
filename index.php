<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

if (count($_POST) > 0) {

    // verifikasi data
    $username = "adimas";
    $email = "adimas@mail.com";
    $number = "08123456789";
    $address = "New York, USA";

    if ($_POST["username"] == $username && $_POST["email"] == $email && $_POST["number"] == $number && $_POST["address"] == $address) {
        echo "<h1>Login Sukses</h1>";

        $_SESSION["nama"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["number"] = $number;
        $_SESSION["address"] = $address;
    } else {
        echo "Login Gagal";
    }
}

if (isset($_SESSION["nama"], $_SESSION["email"], $_SESSION["number"], $_SESSION["address"])) {
    echo "<b> Selamat Datang " . $_SESSION["nama"] . " dengan alamat email " . $_SESSION["email"] . " dan nomor telepon " . $_SESSION["number"] . " dan alamat " . $_SESSION["address"] . "</b>";
} else {
    echo "Anda Belum Login";
}

?>

<html>

<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Masukkan Nama Anda">
        <input type="text" name="email" placeholder="Masukkan Email Anda">
        <input type="text" name="number" placeholder="Masukkan Nomor Telepon Anda">
        <input type="text" name="address" placeholder="Masukkan Alamat Anda">
        <button type="submit">Login</button>
    </form>
</body>

</html>