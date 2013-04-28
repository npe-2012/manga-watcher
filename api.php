<?php

define('UNDER_MAINTANCE', 1);

$manga['title'] = 'Дневники Будущего';

$response['status'] = UNDER_MAINTANCE;
$response['data']	= $manga;

header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json; charset=utf-8');
echo json_encode($response);

?>