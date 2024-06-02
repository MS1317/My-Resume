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
                    <h2>My latest video showcasing my skills</h2>
                    <!-- <p><?php echo $lVideo['v_title']; ?></p> -->
                </div>
                <iframe width="315" height="560" src="<?php echo $lVideo["iframe_src"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="other-videos-sec">
        <h2>More of my work</h2>
        <div class="videos">
            <iframe width="" height="" src="https://www.youtube.com/embed/jY0Wf94uVWQ?si=vuAG6KWpioM_t5l7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    
                
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nFUHkxEuEts?si=xlI45f-tDarT5fUb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/aY7OxBaWFsU?si=gSJe8fQI02UDbbAn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    
</section>



