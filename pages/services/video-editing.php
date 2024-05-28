<!-- <div id="ytContainer"></div>
<div id="pagination"></div> -->
<?php
if (!defined('BASE_PATH')) {
    require('../../config.php');  // Adjust the path as needed based on your directory structure
}
?>
<style>

/* Video container styles */
#latestVideoContainer {
    width: 100%;
    max-width: 600px; /* Adjusted max-width for vertical video */
    margin: 20px auto;
    overflow: hidden;
}

#latestVideo {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.video-title {
    text-align: center;
    margin-bottom: 20px;
    transform: translateX(100%);
    animation: slideIn 1s ease-out forwards; /* Slide in animation */
}


/* Responsive iframe for vertical video */
.vertical-video {
    border: none;
    transform: translateX(100%);
    animation: slideIn 1s ease-out forwards; /* Slide in animation */
}

@media (min-width: 600px) {
    .vertical-video {
        height: 600px;
    }
}

@media (min-width: 800px) {
    .vertical-video {
        height: 750px;
    }
}

/* Animation keyframes */
@keyframes slideIn {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(0);
    }
}

</style>

<div class="page-content intro-overlay">
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
</div>



