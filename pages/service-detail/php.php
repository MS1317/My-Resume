<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php';

?>

<pre>
    <?php
        print_r($phpWebsites);
?>
</pre>

