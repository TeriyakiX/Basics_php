<?php
$directory = getcwd();
$files = scandir($directory);

$folders = array_filter($files, function($item) use ($directory) {
    $itemPath = $directory . '/' . $item;
    return is_dir($itemPath) && !in_array($item, ['.', '..']);
});


foreach ($folders as $folder) {
    echo $folder . "<br>";
}
?><?php
