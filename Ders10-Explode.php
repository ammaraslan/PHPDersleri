<?php
/**
 *Ders10-Explode.php
 *ASLAN
 *12.01.2022
 *16:03
 *PhpStorm
 */

//karekter parçalama
$ad = explode(" ","Ammar ASLAN BATMAN");

foreach ($ad as $item){
    print("</br>".$item);
}
print("</br>");
for($i=0;$i<count($ad);$i++){
    print($ad[$i]);
}