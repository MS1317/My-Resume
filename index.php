<?php
    require "config.php";
    require("db.php");
    // Set the cookie if it's not already set
    if (!isset($_COOKIE['preloaderShown'])) {
        setcookie('preloaderShown', 'true', 0, '/');
    }
    require("header.php");

    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    if ($page == '404') {
        // Include the custom 404 page content
        include '404.php';
        exit;
    }

    // Check if preloaderShown is true
    if (isset($_COOKIE['preloaderShown']) && $_COOKIE['preloaderShown'] === 'true') {
        // Only include body.php
        require("body.php");
    } else {
    // Include the entire content
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

        <div class="content">
            <?php
                require("body.php"); // Include the entire content here
            ?>
        </div>

        <div class="slice-container slice-right">
            <div>
                <p class="powered">Powered by <a href="https://techituber.com/"><span>Techi</span>Tuber</a></p>
            </div>
        </div>
    </div>
</div>
</div>
<?php
}
require("footer.php");  
?>

<script>
function hidePreloader() {
    const sliceLeft = document.querySelector('.slice-left');
    const sliceRight = document.querySelector('.slice-right');

    if (sliceLeft && sliceRight) {
        sliceLeft.classList.add('slice-exit-left');
        sliceRight.classList.add('slice-exit-right');

        // Remove the preloader container after the animation completes
        sliceLeft.addEventListener('animationend', () => {
            document.querySelector('.slice-container').remove();
        });
    } else {
        // console.warn('Preloader elements not found');
    }
}

window.addEventListener('load', () => {
    setTimeout(hidePreloader, 1200); // Adjust the timeout as needed
});

</script>
