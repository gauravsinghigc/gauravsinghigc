<?php
require __DIR__ . "/../acm/SysFileAutoLoader.php";
require __DIR__ . "/../acm/SystemReqHandler.php";
require __DIR__ . "/AuthController/AuthAccessController.php";

//Handle all ModuleControllers
if ($handles = opendir(__DIR__ . "/ModuleController")) {
    while (false !== ($entrys = readdir($handles))) {
        if ($entrys != "." && $entrys != "..") {
            include __DIR__ . "/ModuleController/$entrys";
        }
    }
    closedir($handles);
}
