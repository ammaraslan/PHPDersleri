<?php
/**
 *Ders19-PDO-EKLEME.php
 *ASLAN
 *13.01.2022
 *15:39
 *PhpStorm
 */
include "baglanti.php";
try {
    $sql = "insert into UrunTipi (UrunTipAdi) values(?)";
    $islem = $db->prepare($sql);
    $result = $islem->execute(array("test"));

    if ($result) {
        print "Ekleme Yapıldı";
    } else {
        print "Ekleme Yapılmadı";
    }
} catch (Exception $e) {
    print "HATA";
}