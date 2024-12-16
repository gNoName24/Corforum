<?php
function includeExtra($file) {
    $extraPath = "extra/";
    include $extraPath.$file.'.php';
}
?>

<html lang="ru_ru">
    <head>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/hider.css">
        <title>Записи</title>
    </head>
    <body>
        <? echo includeExtra("highbar/main") ?>
        <!-- <p style="margin: 18px;"><a href="#wnotes">- Что за записи?</a></p>-->
        <div style="text-align: center;">
            <? echo includeExtra("noteslist/main"); ?>
        </div>
        <? echo includeExtra("downbar/main") ?>
        <script src="script.js"></script>
    </body>
</html>