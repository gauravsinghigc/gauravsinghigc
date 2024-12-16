<?php

/**
 * @GetFilesFromDirectory
 */

function GetFilesFromDirectory($dir)
{
    if ($handle = opendir($dir)) {

        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                include "<a href='" . $dir . "/$entry'>$entry</a>";
            }
        }
        closedir($handle);
    }
}
