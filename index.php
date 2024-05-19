<?php
    require("config.php");
    require("db.php");
    require("header.php");
?>
<div class="preload">
    <div class="preloader">
        <div class="preloader-container">
            <div class="slice-container slice-left">
                <div class="device">
                    <div class="device__a">
                    <span class="poppins-semibold">MS</span>
                    <div class="device__a-1"></div>
                    <div class="device__a-2"></div>
                    </div>
                    <div class="device__b"></div>
                    <div class="device__c"></div>
                    <div class="device__d"></div>
                    <div class="device__e"></div>
                    <div class="device__f"></div>
                    <div class="device__g"></div>
                </div>
            </div>
                <?php
                    require("body.php");
                ?>
            <div class="slice-container slice-right">
                <div>
                    <p class="powered">Powered by <a href="https://techituber.com/"><span>Techi</span>Tuber</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

    require("footer.php");
?>
<script>
// Function to trigger the exit animation and remove the preloader
function hidePreloader() {
    const sliceLeft = document.querySelector('.slice-left');
    const sliceRight = document.querySelector('.slice-right');
    sliceLeft.classList.add('slice-exit-left');
    sliceRight.classList.add('slice-exit-right');

    // Remove the preloader container after the animation completes
    sliceLeft.addEventListener('animationend', () => {
        document.querySelector('.slice-container').remove();
    // document.querySelector('.preload').remove();
    });
}

// Simulate the preloader being hidden after content is loaded
window.addEventListener('load', () => {
    setTimeout(hidePreloader, 900); // Adjust the timeout as needed
});
</script>
