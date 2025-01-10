<?php
require_once ROOT . '/modals/ReturnData.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');
$return_data = new ReturnData(NULL, NULL, NULL);
