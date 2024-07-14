<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php';
?>
<section class="page-content">
    <div class="web-list">
        <?php $index="1";?>
        <?php if (!empty($htmlWebsites)) {
            foreach($htmlWebsites as $htmlWebsite): ?>
            <div class="item-wrapper" data-index="<?php  echo $index; ?>" onClick="openDialog('<?php echo $index; ?>')">
                <div class="list-item">
                    <div class="web-no">0<?php echo $index; ?></div>
                    <h3 class="list-item-title"><?php echo $htmlWebsite["name"]; ?></h3>
                </div>
                <div class="web-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis enim placeat explicabo quaerat! Earum cumque, officia ullam minus nobis recusandae facere dolorem iure consectetur nostrum a voluptas voluptates aperiam quia.</div>
                <span class="view-more arrow-right">&#129066;</span>
            </div>

            <div class="backdrop" id="backdrop-<?php echo $index;?>" style="display:none;">
            <dialog id="web-modal-<?php echo $index;?>" class="web-modal">
                    <a class="web-link" href="https://www.<?php echo $htmlWebsite['name']; ?>/">
                        <h3 class="list-item-title"><?php echo $htmlWebsite["name"]; ?></h3>
                    </a>
                    <div class="modal-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus unde temporibus, debitis officia magnam cumque voluptates iste expedita doloremque nisi ex soluta consequatur quaerat accusantium obcaecati corrupti tempore porro! Similique?
                    </div>
                <button class="close-dialog" onClick="closeDialog(<?php echo $index;?>)">
                    close
                </button>
            </dialog>
            </div>
            <?php $index ++;?>
        <?php endforeach;
        } 

        else {
            echo 'No data found';
         }
        ?>
    </div>

</section>
