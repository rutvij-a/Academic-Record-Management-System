<?php
require_once "../config/config.php";
require_once __DIR__ . "/router.php";
$_PATCH;
getData($_PATCH);  
// All files under api/
route('/api/test', 'api/test.php');
route('/api/user', 'api/user.php');
