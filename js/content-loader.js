 // Function to load content based on URL parameter
 function loadContent(page) {
    // Use AJAX to fetch the content of the selected page
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Replace the content of the "content" div with the fetched content
            document.getElementById("content").innerHTML = this.responseText;
            // Update the URL without causing a page refresh
            history.pushState({page: page}, null, '?page=' + page);
        }
    };
    xhttp.open("GET", "pages/" + page + ".php", true);
    xhttp.send();
}