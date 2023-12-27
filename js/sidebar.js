function openNav() {
    document.getElementById("mySidenav").style.maxWidth="250px";
    document.getElementById("mySidenav").style.width="100%";
    document.getElementById("main").style.marginRight="250px"
    document.body.style.backgroundColor="rgba(0,0,0,0.4)";
}

function closeNav(){
    document.getElementById("mySidenav").style.maxWidth= "0";
    document.getElementById("mySidenav").style.width="0";
    document.getElementById("main").style.marginRight="0px"
    document.body.style.backgroundColor = "white";
}