<?
$path = $_SERVER['DOCUMENT_ROOT']."/database/notes/";
if(!isset($_GET['o'])) {
    echo '<h1>Записи</h1><br>';
    $folders = [];
    if (is_dir($path)) {
        foreach (scandir($path) as $item) {
            if ($item !== '.' && $item !== '..' && is_dir($path . DIRECTORY_SEPARATOR . $item)) {
                $folders[] = $item;
            }
        }
    }
    for($i = count($folders)-1; $i >= 0; $i--) {
        $absi = $i+1;

        // Загрузка файлов
        $config = json_decode(file_get_contents($path.$folders[$i].'/config.json'), true);
        
        echo '<section class="content hidden">';

        echo '<a href="?o='.$i.'" style="text-decoration: none; color: inherit;">';
        echo '<div class="outline" style="line-height: 0.5;"><div style="height: 5px;"></div>';

        echo '<h5><div class="top-left-text">'.$config['date'].'</div></h5>'; // Дата

        echo '<h3>~ '.$config['name'].'</h3>'; // Название
        echo '<h5>Автор: <u>'.$config['author'].'</u></h5>'; // Автор

        echo '<div style="height: 5px;"></div></div>';
        echo '</a>';
        
        echo '</section>';
    }
} else {
    echo '<section class="content hidden">';
    $o = $_GET['o'];
    $config = json_decode(file_get_contents($path.$o.'/config.json'), true);
    
    echo '<h1>'.$config['name'].'</h1><br>';
    echo file_get_contents($path.$o.'/main.html');
    echo '</section>';
}
?>