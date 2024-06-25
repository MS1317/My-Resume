<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
?>
<section class="web-choose">
    <!-- <div class="sec-head">
        <h2>Choose the type of website you want to see</h2>
    </div> -->
    <div class="web-selector">
    <?php require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php'; ?>
    <?php if (!empty($webTechnology)) {
    foreach ($webTechnology as $technology): ?>
        <a href="<?php echo $technology["web-link"]; ?>">
            <div class="web-card">
                <div class="web-card-background" style="background-image:url('assets/web/<?php echo $technology["web-icon"]; ?>')">
                    <div class="title-bg">
                        <div class="web-type">
                            <?php echo $technology["web-technology"];?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach;
    }
    else {
        echo"No Data Found";
    }
    ?>
    </div>
</section>