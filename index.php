<?php
function includeExtra($file) {
    $extraPath = "extra/";
    include $extraPath.$file.'.php';
}
?>

<html lang="ru_ru">
    <head>
        <link rel="stylesheet" href="styles/main.css">
        <title>Главная</title>
    </head>
    <body>
        <? echo includeExtra("highbar/main") ?>
        <div style="text-align: center;">
            <h1>Добро пожаловать на мой сайт!</h1>
            <p>Это мой личный сайт, где я публикую свои наработки, идеи, и вообще все что мне захочется</p>
            <br style="display: block; margin-bottom: -5px;">
            <p>Слово <s>дня</s> всего человечества: "Спасибо"</p>
        </div>
        <? echo includeExtra("downbar/main") ?>
    </body>
</html>