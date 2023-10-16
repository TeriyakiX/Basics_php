<?php
$dir = __DIR__;

$files = scandir($dir);
foreach ($files as $file) {
    if ($file !== basename(__FILE__)) {
        echo $file . PHP_EOL;
    }
}

mkdir('folder1');
mkdir('folder2');

$directories = array_filter($files, function($file) use ($dir) {
    $path = $dir . DIRECTORY_SEPARATOR . $file;
    return is_dir($path) && $file !== '.' && $file !== '..';
});

echo "Папки в текущей директории:\n";
foreach ($directories as $directory) {
    echo $directory . PHP_EOL;
}
?>