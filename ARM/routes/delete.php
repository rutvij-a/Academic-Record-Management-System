<?php
require_once "../config/config.php";
require_once __DIR__ . "/router.php";
$_DELETE;
getData($_DELETE);  
// All files under api/
route('/api/test', 'api/test.php');
route('/api/event', 'api/event.php');
route('/api/fest', 'api/fest.php');
route('/api/sponsorships', 'api/sponsorships.php');