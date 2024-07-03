window.onload = function() {
    // Get the initial page from the URL query parameter
    var queryParams = new URLSearchParams(window.location.search);
    console.log(queryParams,"Query Params")

    var initialPage = queryParams.get('page');
    console.log(initialPage,"Initial Page")

    // If initialPage is not null, set it as the active page name
    if (initialPage) {
        console.log("Initial Page is available");

          // Display active page name in active-page class
          var pageParts=initialPage.split('/');
          console.log("Page Parts",pageParts);
          var activePageName = pageParts[pageParts.length - 1];
          activePageName = activePageName.charAt(0).toUpperCase() + activePageName.slice(1); // Capitalize the first letter
          console.log("Active Page Name",activePageName);
          document.querySelector('.active-page p').textContent = activePageName;
        
        document.querySelector('.active-page p').textContent = activePageName;
        console.log("Setting the available initial page")
    }

    // If initialPage is null or undefined, set it to 'home' (default page)
    if (!initialPage) {
        console.log("No Initial Page provided");
        initialPage = 'home';

        // Set the active page name
        console.log("Setting default page as active page");
        
        
        // Display active page name in active-page class
        var pageParts=initialPage.split('/');
        console.log("Page Parts",pageParts);
        var activePageName = pageParts[pageParts.length - 1];
        activePageName = activePageName.charAt(0).toUpperCase() + activePageName.slice(1); // Capitalize the first letter
        console.log("Active Page Name",activePageName);
        document.querySelector('.active-page p').textContent = activePageName;

        document.querySelector('.active-page p').textContent = activePageName;

        // Set the active class for the initial page link
        var initialPageLink = document.getElementById(initialPage);
        console.log("Initial Page Link: ", initialPageLink);
        if (initialPageLink) {
            console.log(
                "Adding Active Class to Initial Page Link"
            );
            initialPageLink.classList.add('active');
        }
    }
};

// Listen for popstate event
window.addEventListener('popstate', function(event) {
    console.log("Popstate Event:", event);
    var state = event.state;
    if (state && state.page) {
        console.log("Setting the active page name");
        loadContent(state.page,event); // Load content based on the state data
    }
    else {
        console.log("No page parameter available, loading home page");
        loadContent('home', event); // Load home page if no page parameter is available
    }
});

function loadContent(page,event) {
    // Check if the event object exists and if the link is being opened in a new tab
    console.log("loadContent entered");
    if(page || event){   
    console.log("Event and page Object exists");
    event.preventDefault();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        console.log("HTTP request function called, readyState:", this.readyState, "status:", this.status);
        if (this.readyState == 4 && this.status == 200) {
            console.log("Successful response received");
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
            var pageParts=page.split('/');
            console.log("Page Parts",pageParts);
            var activePageName = pageParts[pageParts.length - 1];
            activePageName = activePageName.charAt(0).toUpperCase() + activePageName.slice(1); // Capitalize the first letter
            console.log("Active Page Name",activePageName);
            document.querySelector('.active-page p').textContent = activePageName;

            // After loading the content, trigger the type animation again
            initializeTypeEffect();

            // Fade in the new content
            document.getElementById("page-changer").classList.remove('fade-out');
            // Change the timeout value according to your transition duration
        
            console.log("Page content loaded successfully for: " + page);
        }
        else if(this.readyState==4){
            // Debugging step: Log errors if the content loading fails
            console.error("Failed to load content for: " + page + ". Status: " + this.status);
        }
        closeNav();
    };

        // Use a cache-busting query parameter to ensure fresh content
        xhttp.open("GET", "pages/" + page + ".php?timestamp=" + new Date().getTime(), true);
        xhttp.send();
}
} 
