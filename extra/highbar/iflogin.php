<?
//$output = file_get_contents(__DIR__."/iflogin/no");
include $_SERVER['DOCUMENT_ROOT'].'/core/checklogin.php';
$output = file_get_contents(__DIR__."/iflogin/".$checklogin);
?>