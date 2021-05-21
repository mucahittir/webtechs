<?php
$ogrno = "g171210008@sakarya.edu.tr";
$sifre = "g171210008";
$isim = "Mücahit Tiryaki";
if ($ogrno == $_POST['kullanici'] && $sifre == $_POST['sifre']) {
    header("HTTP/1.1 200 OK");
    echo "Hoşgeldiniz " . $isim;
} else {
    header("HTTP/1.1 403 Forbidden");
    echo "Hatalı giriş yaptınız.";
}
