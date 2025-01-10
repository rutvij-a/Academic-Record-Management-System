<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'academic_record_management_system');
    define('PROTOCOL', ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://");
    define('DOMAIN_NAME', $_SERVER['HTTP_HOST']);
    define('SUBFOLDER', "/ARM");
    define('URL', PROTOCOL . DOMAIN_NAME . SUBFOLDER);
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . SUBFOLDER);
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn == false) {
        die('Error: Cannot connect');
    }
    include_once('functions.php');