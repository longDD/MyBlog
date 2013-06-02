<?php

/**
 * long
 *
 * Before finding the right people, the only need to do is to make yourself good enough. 
 *
 * @package		long
 * @author		longDD
 */
// ------------------------------------------------------------------------
//原样输出
function P($cont) {
    echo '<pre>';
    print_r($cont);
    echo '</pre>';
}

//获取文件夹大小
function getDirSize($dir) {
    $handle = opendir($dir);
    $sizeResult = 0;
    while (false !== ($FolderOrFile = readdir($handle))) {
        if ($FolderOrFile != "." && $FolderOrFile != "..") {
            if (is_dir("$dir/$FolderOrFile")) {
                $sizeResult += getDirSize("$dir/$FolderOrFile");
            } else {
                $sizeResult += filesize("$dir/$FolderOrFile");
            }
        }
    }
    closedir($handle);
    return $sizeResult;
}

//文件大小转换
function getRealSize($size) {
    $kb = 1024;         // Kilobyte
    $mb = 1024 * $kb;   // Megabyte
    $gb = 1024 * $mb;   // Gigabyte
    $tb = 1024 * $gb;   // Terabyte

    if ($size < $kb) {
        return $size . " B";
    } else if ($size < $mb) {
        return round($size / $kb, 2) . " KB";
    } else if ($size < $gb) {
        return round($size / $mb, 2) . " MB";
    } else if ($size < $tb) {
        return round($size / $gb, 2) . " GB";
    } else {
        return round($size / $tb, 2) . " TB";
    }
}