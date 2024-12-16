<?
function ex($file) {
    include $file.'.php';
    return $output;
}
?>
<pre><br><a href="/" style="font-size: 28px; margin: 24px;">~ Corforum</a></pre>
<div class="top-right" style="font-size: 14px;">
    <pre>
    <a href="notes.php">Записи</a>  +  <? echo ex("iflogin") ?>
    </pre>
</div>
<hr style="height: 2px; background-color: white;">