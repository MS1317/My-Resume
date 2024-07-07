<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php';
?>
<section class="page-content">
    <div class="web-list">
        <?php if (!empty($htmlWebsites)) {
            foreach($htmlWebsites as $htmlWebsite): ?>
            <div class="item-wrapper">
                <div class="list-item">
                    <div class="web-no">01</div>
                    <h3 class="list-item-title"><?php echo $htmlWebsite["name"]; ?></h3>
                </div>
                <div class="web-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis enim placeat explicabo quaerat! Earum cumque, officia ullam minus nobis recusandae facere dolorem iure consectetur nostrum a voluptas voluptates aperiam quia.</div>
            <i class="view-more fa-solid fa-arrow-right"></i>
        </div>
        <?php endforeach;
        } 

        else {
            echo 'No data found';
         }
        ?>
    </div>
</section>