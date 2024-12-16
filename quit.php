<?php
function includeExtra($file) {
    $extraPath = "extra/";
    include $extraPath.$file.'.php';
}
if(isset($_GET['quit'])) {
    setcookie('username', "", -1, "/");
    setcookie('password', "", -1, "/");
    echo '<meta http-equiv="refresh" content="0;url=/">';
}
?>
<html lang="ru_ru">
    <head>
        <link rel="stylesheet" href="styles/main.css">
        <title>Выход с аккаунта</title>
    </head>
    <body>
        <? echo includeExtra("highbar/main") ?>
        <div style="text-align: center;">
            <h1>Вы точно хотите выйти с аккаунта?</h1>
            <p>В дальнейшем вам нужно будет повторно войти в аккаунт.</p>
            <br>
            <a href="?quit"><u>Выйти</u></a>
        </div>
        <? echo includeExtra("downbar/main") ?>
    </body>
</html>