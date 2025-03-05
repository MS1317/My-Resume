<?php

$localHosts = ['localhost', '192.168.1.217'];

define('IS_LOCALHOST', in_array($_SERVER['SERVER_NAME'], $localHosts));
define('BASE_PATH', IS_LOCALHOST ? '/mscv' : '');
define('BASE_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH . '/');
define('CURRENT_PAGE', isset($_GET['page']) ? $_GET['page'] : 'home');

// Optional: Set error reporting based on environment
if (IS_LOCALHOST) {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
