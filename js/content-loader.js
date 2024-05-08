window.onload = function() {
    // Get the initial page from the URL query parameter
    var queryParams = new URLSearchParams(window.location.search);
    var initialPage = queryParams.get('page');

    // If initialPage is not null, set it as the active page name
    if (initialPage) {
        var activePageName = initialPage.charAt(0).toUpperCase() + initialPage.slice(1); // Capitalize the first letter
        document.querySelector('.active-page p').textContent = activePageName;
    }
};

function loadContent(page) {
    // Use AJAX to fetch the content of the selected page
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Replace the content of the "content" div with the fetched content
            document.getElementById("page-changer").innerHTML = this.responseText;
            // Update the URL without causing a page refresh
            history.pushState({page: page}, null, '?page=' + page);

            // Update the active page dynamically
            var activePageLinks = document.querySelectorAll('.sidebar-content a');
            activePageLinks.forEach(function(link) {
                link.classList.remove('active'); // Remove active class from all links
            });
            var activePageLink = document.getElementById(page);
            if (activePageLink) {
                activePageLink.classList.add('active'); // Add active class to the current page link
            }

            // Display active page name in active-page class
            var activePageName = page.charAt(0).toUpperCase() + page.slice(1); // Capitalize the first letter
            document.querySelector('.active-page p').textContent = activePageName;

            // After loading the content, trigger the type animation again
            initializeTypeEffect();

            // Fade in the new content
             document.getElementById("page-changer").classList.remove('fade-out');
             // Change the timeout value according to your transition duration
     
        }
        closeNav();
    };
    xhttp.open("GET", "pages/" + page + ".php", true);
    xhttp.send();
}
