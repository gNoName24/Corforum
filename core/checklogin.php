<?
include 'varspace.php';

$checklogin = "0";
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    if(file_exists($pathAccounts.md5($username).".account")) {
        $fileContent = file_get_contents($pathAccounts.md5($username).".account");
        $data = json_decode($fileContent, true);
        if($password == $data['native']['password']) {
            $checklogin = "1";
        }
    }
}
?>