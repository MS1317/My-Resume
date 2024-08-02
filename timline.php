
    <div style="height: 2000px; background: lightgray;">
    Scroll down to see the effect
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("DOM fully loaded and parsed");

        window.addEventListener("scroll", function() {
            console.log("Scroll event detected");
        });
    });
    </script>
