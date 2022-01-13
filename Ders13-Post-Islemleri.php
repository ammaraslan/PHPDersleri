<?php
if (isset($_POST["form1"])) {
    extract($_POST);
    if(empty($text)){
        print("Mail Alanını Doldurunuz.");
    }elseif(empty($sifre)){
        print ("Lütfen Şifre alanını doldurunuz.");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Başık</title>
</head>
<body>
<form action="" method="post">
    <div style="display: inline-block">
        <div style="width: 40%"></div>
        <div style="width:200px;height: 150px;">

            <fieldset>
                <legend> Mail</legend>
                <input name="text" type="text" id="mail" value="<?php if(isset($text)){echo $text; }ELSE{ ECHO NULL; } ?>">
            </fieldset>
            <fieldset>
                <legend> Şifre</legend>
                <input name="sifre" type="text" id="sifre" >
            </fieldset>
            <button name="form1" type="submit">Giriş</button>
        </div>
        <div style="width: 40%"></div>
    </div>
</form>
</body>
</html>