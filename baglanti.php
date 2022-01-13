<?php
/**
 *baglanti.php
 *ASLAN
 *13.01.2022
 *15:30
 *PhpStorm
 */

try {
    $db = new PDO("sqlsrv:server=DESKTOP-Aslan;Database=AsmaKat;");
} catch (Exception $e) {
    print "Hatalı";
};
