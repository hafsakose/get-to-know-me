<?php
$dogruKullaniciAdi="b241210004@sakarya.edu.tr";
$dogrusifre="b241210004";

$kullaniciAdi=$_POST[''$kullaniciAdi];
$sifre=$_POST['sifre'];
if($kullaniciAdi===$dogruKullaniciAdi && $sifre===$dogrusifre){
    echo"<h3>Hosgeldiniz $sifre</h3>";
} else {
    header("Location: login.html");
    exit();
}




?>


