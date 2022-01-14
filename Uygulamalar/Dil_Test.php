<?php
/**
 *Dil_Test.php
 *ASLAN
 *11.01.2022
 *22:28
 *PhpStorm
 */
session_start();
ob_start();

if (isset($_GET["diller"])) {
    $_SESSION["DİL"] = $_GET["diller"];

} else {
    $_SESSION["DİL"] = "tr";

}
if ($_SESSION["DİL"] == "tr")
    $dil = "tr";
else
    $dil = "eng";
//$dil="tr";
$dil = require_once($dil . ".php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $dil["baslik"] ?></title>
</head>
<body>
<div style=" display:inline-block; float: left">
    <h1><?= $dil["selamlama"] ?></h1>
</div>
<div style="padding: 33px;">
    <form name="form1" action="" method="GET">
        <select name="diller" onchange="this.form.submit()">
            <option value="tr"  <?php if ($_SESSION["DİL"] == "tr"){ print "selected";}?>>tr
            </option>
            <option value="eng"  <?php if ($_SESSION["DİL"] == "eng"){ print "selected";}?>> eng
            </option>
        </select>
    </form>
</div>
</body>
</html>
