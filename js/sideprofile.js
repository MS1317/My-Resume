function openSideProfile() {
    
    document.getElementById("mySideProfile").style.maxWidth="250px";
    document.getElementById("mySideProfile").style.width="100%";
    document.getElementById("main").style.marginLeft="183px";
    document.body.style.backgroundColor="rgba(0,0,0,0.4)";

    // document.getElementsByClassName("side-navbar").style.right="-33px";
}

function closeSideProfile(){
    document.getElementById("mySideProfile").style.maxWidth= "0";
    document.getElementById("mySideProfile").style.width="0";
    document.getElementById("main").style.marginLeft="0px";
    document.body.style.backgroundColor = "white";
    document.getElementsByClassName.style.right="268px"
    // document.getElementsByClassName("sidenavbar").style.right="0"
}