<!-- <div id="ytContainer"></div>
<div id="pagination"></div> -->

<div class="page-content py-3">
<?php require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php'; ?>
    <?php if(!empty($lVideoData)){
        $lVideo = $lVideoData[0];
    ?>
    <div id="latestVideoContainer">
        <div id="latestVideo">
            <div class="video-wrapper">
                <div class="video-title">
                    <h2>Take a look at my editing skills in my latest video</h2>
                    <h3>
                        <?php  echo $lVideo['v_title'];?>
                    </h3>
                </div>

                <iframe width="315" height="560" src="<?php echo $lVideo["iframe_src"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        
            </div>
        </div>
    </div>
    <?php } ?>
</div>
