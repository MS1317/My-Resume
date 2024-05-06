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

// function typeEffect() {
//     // Type effect
//     const typedSpan = document.getElementById("typed");
//     if (!typedSpan) {
//         console.error("Typed span element not found!");
//         return;
//     }

//     const totype = ["Frontend"];
//     let phraseIndex = 0;

//     // Set the text content without any animation
//     typedSpan.textContent = totype[phraseIndex];
// }

window.onload = function() {
 // Set the text content of the typed span
 const typedSpan = document.getElementById("typed");
 if (typedSpan) {
     typedSpan.textContent = "venus";
 } else {
     console.error("Typed span element not found!");
 }

 // Example function to remove text content after a delay (e.g., 3 seconds)
 setTimeout(function() {
     if (typedSpan) {
         typedSpan.textContent = "";
     }
 }, 3000);
};


