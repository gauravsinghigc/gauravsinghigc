<?php

//list of local server IPV4 address
/**
 * This will enable local access of app on local Network acress all devices that are connected 
 * In any method over same interent connection.
 * 
 * to check your IPV4 Address
 * Open CMD
 * Type : ipconfig
 * Copy and Paste IPV4 value in LOCAL_HOST array 
 * That's IT
 * 
 * Now open/share This IPV4 value to any user or device connected on same interenet connection. They will
 * access the App for testing, overview, demo or other
 * 
 * **** IMPORTANT ****
 * THIS WILL ONLY WORK ON LOCAL NETWORKS ONLY
 * FOR 
 * LIVE MODE
 * YOU CAN OPEN DIRECTLY ROOT/DOMAIN WHERE IT IS UPLOADED
 * 
 * THANKS
 * 
 */

//Display Errors
error_reporting(E_ALL);
ini_set("display_errors", 1);


//error log file
ini_set("log_errors", 1);
date_default_timezone_set("Asia/Calcutta");
ini_set('error_log', dirname(__FILE__) . '/../storage/logs/err_log_for_' . date("d_M_Y") . '.txt');

// Save session with secure params
session_set_cookie_params([
    'lifetime' => 0, // Session cookie lasts only as long as the browser is open
    'path' => '/',
    'domain' => "", // Use the constant DOMAIN
    'secure' => true, // Only send cookie over HTTPS
    'httponly' => true, // Prevent JavaScript access to the cookie
    'samesite' => 'Strict', // Prevent cross-site requests
]);

//session_start()
session_start();

//ob_start()
ob_start();

//App Configurations
//Change configuration according to your need and project requirements

//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $link = "https";
} else {
    $link = "http";
}

// Here append the common URL characters.
$link .= "://";

//dir & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);

//system url handler
require __DIR__ . "/../config.php";

//DB File Loader
require __DIR__ . "/SystemDBConnector.php";

//Inital DB Executor
require __DIR__ . "/SysInitialDBExecutor.php";

//system Module Manager
require __DIR__ . "/SystemFileProcessor.php";

//system configuration Handler
require __DIR__ . "/SystemConfigurations.php";

//auto load all modules
require __DIR__ . "/SysModuleAutoLoader.php";


//generate backup only if required
if (isset($_GET['backup'])) {

    //check and validate backup requirement
    if ($_GET['backup'] == "true") {

        //generate backup of previous codes
        // Specify the directory and file to check
        $directory = __DIR__ . '/../storage/backups';
        if (!file_exists($directory)) {
            mkdir($directory);
        }
        $filename = "CODE_BackUp_" . date('Ymd') . ".zip";

        // Combine the directory and file to create the full path
        $filepath = $directory . '/' . $filename;

        // Check if the file exists
        if (!file_exists($filepath)) {
            // Define the source directory
            $sourceDir = realpath(__DIR__ . '/..');

            // Define the zip file path
            $zipFilePath = __DIR__ . "/../storage/backups/$filename";

            try {
                // Create a ZipArchive object
                $zip = new ZipArchive();


                // Open or create the zip file
                if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
                    throw new Exception("Failed to open or create zip file: $zipFilePath");
                }

                // Create a recursive iterator to get all files and directories
                $files = new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator($sourceDir),
                    RecursiveIteratorIterator::SELF_FIRST
                );

                foreach ($files as $name => $file) {
                    // Skip directories (they will be added automatically)
                    if (!$file->isDir()) {
                        $filePath = $file->getRealPath();
                        $relativePath = substr($filePath, strlen($sourceDir) + 1);

                        // Adjust the relative path to include subdirectories
                        $relativePathInZip = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);

                        // Add the current file to the zip archive with the original relative path
                        $zip->addFile($filePath, $relativePath);
                    }
                }

                // Close the zip archive
                $zip->close();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
