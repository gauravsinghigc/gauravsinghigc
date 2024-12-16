<?php

//get directory size in B, kb, mb, gb, tb
function DirectorySize($path)
{
    $totalSize = 0;

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

    foreach ($iterator as $file) {
        // Skip files or directories starting with a dot
        if ($file->getFilename()[0] === '.') {
            continue;
        }

        $totalSize += $file->getSize();
    }

    $size = $totalSize;
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $i = 0;
    while ($size >= 1024 && $i < count($units) - 1) {
        $size /= 1024;
        $i++;
    }

    return round($size, 2) . ' ' . $units[$i];
}


//get dir last create time and update time
function DirectoryTimeInfo($path)
{
    // Get the creation time of the directory
    $createTime = filectime($path);

    // Get the last modification time of the directory
    $updateTime = filemtime($path);

    return array(
        'CreateTime' => date('d M, Y H:i:s', $createTime),
        'LastUpdateTime' => date('d M, Y H:i:s', $updateTime)
    );
}


//file types and extension in a dir
function FileTypesAndExtensions($path)
{
    $fileTypes = array();

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $extension = pathinfo($file->getFilename(), PATHINFO_EXTENSION);
            $fileType = mime_content_type($file->getPathname());

            if (!isset($fileTypes[$fileType])) {
                $fileTypes[$fileType] = array();
            }

            if (!in_array($extension, $fileTypes[$fileType])) {
                $fileTypes[$fileType][] = $extension;
            }
        }
    }

    // Example usage:
    $directoryPath = $path;
    $fileTypesAndExtensions = FileTypesAndExtensions($directoryPath);

    $extensions = "";
    foreach ($fileTypesAndExtensions as $fileType => $extensions) {
        $extension .= "(File Type: {$fileType})";
        $extension .= "- (" . implode(', ', $extensions) . ")";
    }

    $fileTypes = $extensions;
    return $fileTypes;
}
