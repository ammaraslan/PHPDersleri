<?php

/*
$dizi1 = [1, 2, 3, 4, 5];

//dizi içeriğini kartıştırma.
shuffle($dizi1);
print_r($dizi1);
print("</br>");
//dizi indexleme yapar anahtar ilk dizi olur.
$dizi2 = ["a", "b", "c", "d"];
$dizi3 = ["1", "2", "3", "4"];

$combinem = array_combine($dizi3, $dizi2);
print_r($combinem);
print("</br>");
//count-calues
$dizi2 = ["a", "b", "a", "a"];
$dizi = array_count_values($dizi2);
print_r($dizi);
print("</br>");

//array-flip -anahtar ve değer yer değiştirir.
$dizi = array(
    "Bir" => 1,
    "İki" => 2
);
print_r($dizi);
array_flip($dizi);
print_r($dizi);
print("</br>");
// Array MAP -- Elemanları yeni diziye dönüştürüyor.

$dizi = ["a", "b"];

$dizi2 = array_map("degistir", $dizi);

function degistir($deger)
{
    return $deger . " Ammar";
}
print("</br>");
print_r($dizi2);
print("</br>");
//Array filter --> aray map çok benzer / boş değerleri siler

$dizi = ["aa", "ab",""];

$dizi2 = array_filter($dizi);
print("</br>");
print_r($dizi2);
print("</br>");


//Array merge --> aray birleştirir

$dizi = ["aa", "ab"];
$dizi2=[1,2];
$dizi2 = array_merge($dizi,$dizi2);

print_r($dizi2);
print("</br>");


//Array rand --> dizi karıştır

$dizi = ["aa", "ab"];
array_rand($dizi,1);
print_r($dizi);
print("</br>");

//Array reverse --> dizi tersine çevirir*/
/**
 *Ders12-Dizi-fonksiyonlar.php
 *ASLAN
 *12.01.2022
 *16:28
 *PhpStorm
 */

/*$dizi = ["aa", "ab"];
$dizi=array_reverse($dizi);
print_r($dizi);
print("</br>");*/

//Array search --> dizi eleman arama yapar*/

$dersler =["x","b","a"];

 $ara  =array_search("a",$dersler);
 print($ara);
//array_shift --> ilk elamanı siler
//array_pop -->son elemanı siler
//array_slice --> istenilen bir parçayı aldırır.
//array_sum --> Tüm elemanları toplar.
//array_product --> Tüm elemanları çarpar
//array_uniq  --> aynıları siler
//array_values
$dersler =[
    "ders1" => "php",
    "ders2" => "php",
    "ders3" => "php",
    "ders4" => "php",
];
print_r($dersler);

$vals = array_values($dersler);
print_r($vals);


//array_push --> sonuna yeni değer ekletir.
//array_unsift --> başına yeni değer ekletir.
//array_keys --> dizilerin anahtarlarını almayı sağlar.
//current(dizi) --> dizinin ilk elemanı alır
//end(dizi) -->dizinin son elemanını verir.
//next(dizi) -->sonrakini aldırır.
//prev(dizi) -->öncekini aldırır.

//reset(dizi) --> next prev curren ten sonra sıfırlamayı sağlar.

//extract --> anahtar değerleri değişken olarak kullanabilriiz.

$dersler =[
    "ders1" => "php",
    "ders2" => "js",
    "ders3" => "asd",
    "ders4" => "ddd",
];

extract($dersler);
echo $ders4;

//asort --> sıralama yapar --> küçükten büyüğe
//arsort -->sıralama yapar --> büyükten küçüğe
//ksort -->sıralama yapar --> anahtarları küçükten büyüğe
//krsort -->sıralama yapar --> anahtarları büyükten küçüğe

