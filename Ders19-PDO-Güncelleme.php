<?php
/**
 *Ders19-PDO-Güncelleme.php
 *ASLAN
 *13.01.2022
 *16:12
 *PhpStorm
 */

include "baglanti.php";

$sql ="UPDATE UrunTipi
SET UrunTipAdi = ?
WHERE UrunTipID = ?;";

$islem  = $db->prepare($sql);
$result  =$islem->execute(array("ammar nenü",1));
if ($result){
    print "güncelleme işlemi başarılı";
}
else{
    print "HATA ALDIK";
}