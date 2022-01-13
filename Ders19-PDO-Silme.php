<?php
/**
 *Ders19-PDO-Silme.php
 *ASLAN
 *13.01.2022
 *15:58
 *PhpStorm
 */

include_once "baglanti.php";

$sql = "DELETE FROM UrunTipi WHERE UrunTipID=? ";
$islem = $db->prepare($sql);
$result = $islem->execute(array("2"));
if ($result){
    print "silme işlemi başarılı";
}
else{
    print "HATA ALDIK";
}