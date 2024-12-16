<?
include 'varspace.php';
$path = $pathAccounts.md5($username).".account";
if(file_exists($path)) {
    $fileContent = file_get_contents($path);
    $data = json_decode($fileContent, true);
    if($data['native']['password'] == $password) {
        setcookie("username", $username, time() + 1209600, "/");
        setcookie("password", $password, time() + 1209600, "/");
        echo "Вы успешно вошли в аккаунт";
        echo '<meta http-equiv="refresh" content="0;url=/">';
    } else {
        echo "Неверный пароль";
    }
} else {
    echo "Аккаунта с таким юзернеймом не существует";
}
?>