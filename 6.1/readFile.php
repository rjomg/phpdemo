<?php
class readFile
{
    function scanFile($path) {
        global $result;
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                if (is_dir($path . '/' . $file)) {
                    self::scanFile($path . '/' . $file);
                } else {
                    $result[] = $path . '/' . $file;
//                    $result[] = basename($file);
                }
            }
        }
        return $result;
    }
}

$worker = new readFile();
$path = './';
$result = $worker->scanFile($path);
print_r($result);