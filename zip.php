<?php

define('ROOT', dirname(__FILE__).'/');

$path = $_GET['folder'];

$zip = new ZipArchive();
$filename = "./cache/".uniqid().".zip";

if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("Cannot open <$filename>\n");
}

$files = glob(ROOT.$path."/*");
foreach($files as $key => $value)
{
	$fileinfo = pathinfo($value);
	$zip->addFile($value, $key.".".$fileinfo['extension']);
}
$zip->close();

$filesize = filesize($filename);

header("Content-Type: application/zip");
header('Content-Disposition: attachment; filename="chapter.zip"');
header('Content-Length: '.$filesize);
header('Transfer-Encoding: binary');
readfile($filename);
unlink($filename);

?>