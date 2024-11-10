<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php';
?>
<section class="web page-content">
    <div class="web-list">
        <?php $index = "1";?>
        <?php if (!empty($htmlWebsites)) {
            foreach($htmlWebsites as $htmlWebsite): ?>
        <div>
            <div class="item-wrapper"
                data-index="<?php  echo $index; ?>"
                onClick="openDialog('<?php echo $index; ?>')">
                <div class="list-item">
                    <div class="web-no">0<?php echo $index; ?></div>
                    <h3 class="list-item-title">
                        <?php echo $htmlWebsite["name"]; ?>
                    </h3>
                </div>

                <div class="web-desc">
                    <?php echo $htmlWebsite['desc']; ?>
                </div>
                <span class="view-more arrow-right">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </span>
            </div>

            <div class="backdrop" id="backdrop-<?php echo $index;?>"
                style="display:none;">
                <dialog id="web-modal-<?php echo $index;?>"
                    class="web-modal">
                    <div class="scrollable-content  d-flex flex-row gap-3 align-items-center">

                        <div id="dialog-background-image">
                            <a class="web-link"
                                href="https://www.<?php echo $htmlWebsite['name']; ?>/">
                                <h3 class="list-item-title">
                                    <?php echo $htmlWebsite["name"]; ?>
                                </h3>
                            </a>

                            <div class="modal-desc">
                                <?php echo $htmlWebsite['desc']; ?>
                            </div>

                            <button class="close-dialog"
                                onClick="closeDialog(<?php echo $index;?>)">
                                Close
                            </button>
                        </div>

                        <div class="web-bg-cover pulse"
                            style="background-image:url('assets/web/websites/<?php echo $htmlWebsite['web_img']; ?>');">
                        </div>
                </dialog>
            </div>
        </div>
        <?php $index++;?>
        <?php endforeach;
        } else {
            echo 'No data found';
        }
?>
    </div>
</section>
