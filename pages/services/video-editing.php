<!-- <div id="ytContainer"></div>
<div id="pagination"></div> -->
<?php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
?>

<section id="video-editing" class="page-content intro-overlay">
    <?php require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php'; ?>
    <?php if(!empty($lVideoData)){
        $lVideo = $lVideoData[0];
    ?>
    <div id="latestVideoContainer">
        <div id="latestVideo">
            <div class="video-wrapper">                
                <div class="video-title">
                    <h2>Take a look at my editing skills in my latest video</h2>
                    <p><?php echo $lVideo['v_title']; ?></p>
                </div>
                <iframe width="315" height="560" src="<?php echo $lVideo["iframe_src"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="other-videos">
        <h2 class="sec-heading">My best work till date</h2>
        <div class="video-grid1">
            <iframe class="iframe" src="https://www.youtube.com/embed/jY0Wf94uVWQ" title="1 Year Experience with Asus Tuff A15 | A15 in 2023 | A15 Budget Gaming Laptop |TechiTuber" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe class="iframe" src="https://www.youtube.com/embed/nFUHkxEuEts" title="OnePlus 10R 5G Review||TechiTuber" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe class="iframe" src="https://www.youtube.com/embed/aY7OxBaWFsU" title="How to get free google photos storage 2022||TechiTuber" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="video-grid2">
        <iframe class="iframe" width="315" height="560" src="https://www.youtube.com/embed/j3mIb8BjyOg" title="Instagram Body Frame Filter for tracking your body movements" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>



