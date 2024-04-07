function openNav() {
    document.getElementById("mySidenav").style.maxWidth="250px";
    document.getElementById("mySidenav").style.width="100%";
    document.getElementById("hero-sec").style.marginRight="81px";
    document.getElementById("sideProfileBtn").style.display="none";
    document.getElementById("backdrop-filtr").style.backgroundColor="rgba(30,30,40,.88)";
    document.getElementById("content").style.left="-100px";
}

function closeNav(){
    document.getElementById("mySidenav").style.maxWidth= "0";
    document.getElementById("mySidenav").style.width="0";
    document.getElementById("hero-sec").style.marginRight="0px"
    document.getElementById("sideProfileBtn").style.display="block";
    document.getElementById("backdrop-filtr").style.backgroundColor="unset";
    document.getElementById("content").style.left="0px";
}