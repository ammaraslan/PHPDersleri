<?php
/**
 *Ders17-yukle.php
 *ASLAN
 *13.01.2022
 *10:33
 *PhpStorm
 */

if (isset($_POST["yukle"])) {
    print_r ($_FILES);
    move_uploaded_file($_FILES["dosya"]["tmp_name"],"Uygulamalar/".$_FILES["dosya"]["name"]);
}