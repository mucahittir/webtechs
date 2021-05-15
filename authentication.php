<?php
$ogrno = "g171210008";
$sifre = "22994214676";
if (!isset($_POST['kullanici']) || !isset($_POST['sifre'])) {
    echo "Hatalı giriş yaptınız";
    return null;
}
if ($ogrno == $_POST['kullanici'] || $sifre == $_POST['sifre']) {
    echo "Harikalar yaratıyorsunuz hoşgeldiniz " . $_POST['kullanici'];
}
