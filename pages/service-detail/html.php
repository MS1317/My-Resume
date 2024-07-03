<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php';
?>
<section class="page-content">
    <div class="web-list">
        <div class="item-wrapper">
            <div class="list-item">
                <span class="web-no">01</span>
                <div class="list-item-title">Title</div>
            </div>
            <div class="web-link">weblink</div>
        </div>
    </div>
</section>