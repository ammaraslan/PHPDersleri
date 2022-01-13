<?php
/**
 *Ders19-PDO-Listeleme.php
 *ASLAN
 *13.01.2022
 *11:23
 *PhpStorm
 */

//try {
//    $sql = "Select * from Kullanicilar";
//    $db = new PDO("sqlsrv:server=DESKTOP-Aslan;Database=AsmaKat;");
//    $query = $db->query($sql);
//    $users = $query->fetchAll(PDO::FETCH_ASSOC);
//    foreach($users as $user) {
//        extract($user);
//        print "ad: " . "$Ad - ";
//        print "$Soyad</br>";
//    }
//} catch (Exception $e) {
//    print "Hatalı";
//};
include "baglanti.php";

    $tip = 0;
    $sql = "Select * from UrunTipi ";
    $users = $db->PREPARE($sql);
    $users->execute();
    $users = $users->fetchAll();
    foreach ($users as $user) {
        extract($user);
        print "ad: " . "$UrunTipAdi - ";
        print "</br>";
    }
