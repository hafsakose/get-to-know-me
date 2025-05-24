<?php
$dogru_kullanici = "2023123456"; 
$dogru_sifre = "1234";


$kullanici = $_POST['username'];
$sifre = $_POST['password'];


if (filter_var($kullanici, FILTER_VALIDATE_EMAIL)) {
    /
    header("Location: login.html");
    exit();
}


if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    echo "<h2>Hoş geldiniz, $kullanici </h2>";
} else {
   
    header("Location: login.html");
    exit();
}
?>
