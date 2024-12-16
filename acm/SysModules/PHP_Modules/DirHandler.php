<?php
//create empy direction if required
function CHECK_DIR_AND_CREATE_IF_EMPTY($dir)
{
    //check if directory exists
    if (!file_exists("$dir")) {
        mkdir("$dir", 0777, true);
    }
}
