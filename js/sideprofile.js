function openSideProfile() {
    
    document.getElementById("mySideProfile").style.maxWidth="250px";
    document.getElementById("mySideProfile").style.width="100%";
    document.body.style.backgroundColor="rgba(0,0,0,0.4)";
    document.getElementById("navBtn").style.display="none";
    // document.getElementsByClassName("side-navbar").style.right="-33px";
}

function closeSideProfile(){
    document.getElementById("mySideProfile").style.maxWidth= "0";
    document.getElementById("mySideProfile").style.width="0";
    document.body.style.backgroundColor = "white";
    document.getElementById("navBtn").style.display="block";
    // document.getElementsByClassName("sidenavbar").style.right="0"
}