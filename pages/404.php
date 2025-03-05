<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../config.php');  // Adjust the path as needed based on your directory structure
}
?>
<section class="page-content">
    <div class="error">
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <dotlottie-player src="https://lottie.host/e5e6eb1a-cb8d-41ea-b8bf-159c91fab407/BVmojKFevG.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
    </div>
    <a href="?page=home" onclick="loadContent('home', event)">Go to Home</a>
</section>
