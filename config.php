<?php
// Define base URL or root directory based on the environment
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    define('BASE_PATH', '/mscv'); // Local environment
} else {
    define('BASE_PATH', ''); // Production environment
}
?>
