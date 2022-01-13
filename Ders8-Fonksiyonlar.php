<?php
/**
 *Ders8-Fonksiyonlar.php
 *ASLAN
 *12.01.2022
 *14:35
 *PhpStorm
 */
/*
function EkranaYaz($isim,$soyisim){
    print($isim." ".$soyisim);
}
function kareal($sayi){
    print("</br>");
    print($sayi*$sayi);
}
function isimGetir(){
    print("</br>");
    $isimler = array();
    $isimler["Birinci"]="Ali";
    $isimler["İkinci"]="Veli";
    return $isimler;
}

ekranayaz("Ammar","Aslan");

kareal(5);

$arr = isimGetir();
print_r($arr);
foreach ($arr as $item){
    print("</br>");
    print($item);
}*/
/*$db = "Ammar ASLAN";
define("sabitim","544545");

function EkranaYaz(){
    global $db;
    print($db);
    print ("</br>");
    print(sabitim);
}
ekranayaz();*/

$isim = function(){
  echo "Merhaba Dünya";
};
$isim();
