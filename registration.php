<?
function includeExtra($file) {
    $extraPath = "extra/";
    include $extraPath.$file.'.php';
}

// Проверка отправленной регистрации
$error = false;
if (isset($_POST['username'])) {
    if(isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        include 'core/reg.php';
    } else {
        $error = true;
    }
}
?>

<html lang="ru_ru">
    <head>
        <link rel="stylesheet" href="styles/main.css">
        <title>Регистрация</title>
    </head>
    <body>
        <? echo includeExtra("highbar/main") ?>
        <div class="container">
            <h1>Регистрация</h1>
            <? if($error) { echo "<h3>Вы не задали пароль!</h3>"; } ?>
            <form action="#" method="POST">
                <label for="username">Имя пользователя:</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Зарегистрироваться">
            </form>
        </div>
    </body>
</html>