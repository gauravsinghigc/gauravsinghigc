<?php
require "../../acm/SysFileAutoLoader.php";

session_start();
session_destroy();

session_start();

$_SESSION['info'] = "Logout Successfully!";

header("location: ../");
