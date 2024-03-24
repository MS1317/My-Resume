function openNav() {
    document.getElementById("mySidenav").style.maxWidth="250px";
    document.getElementById("mySidenav").style.width="100%";
    document.getElementById("hero-sec").style.marginRight="81px";
    document.getElementById("sideProfileBtn").style.display="none";
    // document.getElementsByClassName("side-navbar").style.right="-33px";
    document.getElementById("backdrop-filtr").style.backgroundColor="rgba(0,0,0,0.5)";
}

function closeNav(){
    document.getElementById("mySidenav").style.maxWidth= "0";
    document.getElementById("mySidenav").style.width="0";
    document.getElementById("hero-sec").style.marginRight="0px"
    document.getElementById("sideProfileBtn").style.display="block";
    document.getElementById("backdrop-filtr").style.backgroundColor="unset";
}