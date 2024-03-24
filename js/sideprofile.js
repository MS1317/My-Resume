
function openSideProfile() {
    // document.getElementById("mySideProfile").style.maxWidth="250px";
    document.getElementById("mySideProfile").style.width="250px";
    document.getElementById("navBtn").style.display="none";
    document.getElementById("profile-cont").style.left="0px";
    document.getElementById("backdrop-filtr").style.backgroundColor="rgba(0,0,0,0.5)";
}

function closeSideProfile(){
    // document.getElementById("mySideProfile").style.maxWidth= "0";
    document.getElementById("mySideProfile").style.width="0";
    document.getElementById("navBtn").style.display="block";
    document.getElementById("profile-cont").style.left="-240px"
    document.getElementById("backdrop-filtr").style.backgroundColor="unset";
}