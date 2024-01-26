function openNav() {
    document.getElementById("mySidenav").style.maxWidth="250px";
    document.getElementById("mySidenav").style.width="100%";
    document.getElementById("main").style.marginRight="81px"
    document.body.style.backgroundColor="rgba(0,0,0,0.4)";
    document.getElementById("sideProfileBtn").style.display="none";
    document.getElementsByClassName("side-navbar").style.right="-33px";
}

function closeNav(){
    document.getElementById("mySidenav").style.maxWidth= "0";
    document.getElementById("mySidenav").style.width="0";
    document.getElementById("main").style.marginRight="0px"
    document.body.style.backgroundColor = "white";
    document.getElementById("sideProfileBtn").style.display="block";
    // document.getElementsByClassName("sidenavbar").style.right="0"
}