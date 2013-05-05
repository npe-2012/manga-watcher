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

header('Content-Description: File Transfer');
header('Content-Length: '.filesize($filename));
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="chapter.zip"');
header('Transfer-Encoding: binary');
readfile($filename);
unlink($filename);

?>