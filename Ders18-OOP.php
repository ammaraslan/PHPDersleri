<?php

 class Insanlar
{
    public function __construct()
    {
        print "Kurucu Metot Çalıştı </br>";
    }

    public const isim = "Ammar";
    public $soyad = "Aslan";

    function soyadgetir()
    {
        print($this->soyad . " Çalıştım");
    }
    function adgetir()
    {
        print(self::isim . " Çalıştım");
    }
}


