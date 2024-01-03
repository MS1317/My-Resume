function openNav() {
    document.getElementById("mySidenav").style.maxWidth="250px";
    document.getElementById("mySidenav").style.width="100%";
    document.getElementById("main").style.marginRight="183px"
    document.body.style.backgroundColor="rgba(0,0,0,0.4)";
    document.getElementsByClassName("side-navbar").style.right="-33px";
}

function closeNav(){
    document.getElementById("mySidenav").style.maxWidth= "0";
    document.getElementById("mySidenav").style.width="0";
    document.getElementById("main").style.marginRight="0px"
    document.body.style.backgroundColor = "white";
    // document.getElementsByClassName("sidenavbar").style.right="0"
}