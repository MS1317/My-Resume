
function openSideProfile() {
    // document.getElementById("mySideProfile").style.maxWidth="250px";
    document.getElementById("mySideProfile").style.width="250px";
    document.getElementById("navBtn").style.display="none";
    document.getElementById("profile-cont").style.width="250px";
    document.getElementById("backdrop-filtr").style.backgroundColor="rgba(30,30,40,.88)";
}

function closeSideProfile(){
    // document.getElementById("mySideProfile").style.maxWidth= "0";
    document.getElementById("mySideProfile").style.width="0";
    document.getElementById("navBtn").style.display="block";
    document.getElementById("profile-cont").style.width="0px"
    document.getElementById("backdrop-filtr").style.backgroundColor="unset";
}

function checkWidthAndClose() {
    if (window.innerWidth >= 969) {
        closeSideProfile();
        console.log("Window width is greater than 969, close function called");
    }
}

window.addEventListener('resize', checkWidthAndClose );