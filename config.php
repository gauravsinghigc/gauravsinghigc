<?php
define("LOCAL_HOST", [
    "127.0.0.1",
    "192.168.1.7",
    "::1",
    "localhost",
    "192.168.1.9",
    "192.168.43.14",
    "192.168.1.10",
    "192.168.1.11",
    "192.168.1.5",
    "192.168.1.10",
    "192.168.1.15",
    "192.168.1.83",
    "192.168.1.18",
    "192.168.1.19",
    "192.168.1.8",
    "192.168.1.4",
    "192.168.1.3",
    "192.168.104.80",
    "192.168.1.6"
]);

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
    define("DOMAIN", $link . HOST . "/gauravsinghigc");
} else {
    define("DOMAIN", $link . HOST);
}

//database status
DEFINE("CONTROL_DATABASE", true);
DEFINE("CONTROL_DB_STATUS", false);

//Database connections
DEFINE("DB_SERVER_HOST", "localhost");
DEFINE("DB_SERVER_USER", "root");
DEFINE("DB_SERVER_PASS", "");
DEFINE("DB_SERVER_DB_NAME", "gauravsinghigc");
