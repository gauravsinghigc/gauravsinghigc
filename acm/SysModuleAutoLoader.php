<?php
if ($handle = opendir(__DIR__ . "/../modules")) {

    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            if (!str_contains($entry, "map")) {
                include __DIR__ . "/../modules/$entry";
            }
        }
    }
    closedir($handle);
}
