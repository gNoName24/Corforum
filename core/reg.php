<?
// РЕГИСТРАЦИЯ

include 'varspace.php';

$umd5 = md5($username);
$md5 = md5($password);
$path = $pathAccounts.$umd5.".account";

// Проверка наличия файла аккаунта
if(!file_exists($path)) {
    
    $data = [
        "native" => [
            "username" => $username,
            "password" => $md5,
        ],
        "globalRole" => 0,
        "customRoles" => []
    ];
    
    if (file_put_contents($path, json_encode($data)) !== false) {
        
        setcookie("username", $username, time() + 1209600, "/"); // 14 дней
        setcookie("password", $md5, time() + 1209600, "/");
        
        echo "Аккаунт успешно создан";
        echo '<meta http-equiv="refresh" content="0;url=/">';
    } else {
        echo "Не удалось создать аккаунт";
    }
} else {
    echo "Аккаунт под таким именем уже существует";
}
?>