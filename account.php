<?php
function includeExtra($file) {
    $extraPath = "extra/";
    include $extraPath.$file.'.php';
}
include 'core/checklogin.php';
if($checklogin == "0") {
    echo '<meta http-equiv="refresh" content="0;url=/">';
}
?>
<html lang="ru_ru">
    <head>
        <link rel="stylesheet" href="styles/main.css">
        <title>Ваш аккаунт</title>
    </head>
    <body>
        <? echo includeExtra("highbar/main") ?>
        <div style="text-align: center;">
            <h1>Мой аккаунт</h1>
            <p>Ваш никнейм: <? echo $_COOKIE['username'] ?> (классный)</p>
        </div>
        <? echo includeExtra("downbar/main") ?>
    </body>
</html>