<?php
require_once "../config/config.php";
require_once __DIR__ . "/router.php";

// All files under api/
route('/api/test', 'api/test.php');
route('/api/user', 'api/user.php');