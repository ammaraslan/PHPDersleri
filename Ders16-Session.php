<?php
/**
 *Ders16-Session.php
 *ASLAN
 *13.01.2022
 *10:20
 *PhpStorm
 */

//Başlatma

session_start();
ob_start(); // Hata almamak için kullanılır.

$_SESSION["isim"] = "Ammar";
$_SESSION["soyad"] = "ASLAN";
//session_destroy(); // sessionu siler

print($_SESSION["isim"]);


//tek session silmek için kullanılır.


unset($_SESSION["soyad"]);

print($_SESSION["soyad"]);


