<?php
// Define base URL or root directory based on the environment
if ($_SERVER['SERVER_NAME'] === 'localhost'|| $_SERVER['SERVER_NAME'] === '192.168.1.208'|| $_SERVER['SERVER_NAME'] === '192.168.1.215') {
    define('BASE_PATH', '/mscv'); // Local environment
} else {
    define('BASE_PATH', ''); // Production environment
}
?>
