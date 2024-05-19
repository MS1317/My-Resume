function openNav() {
    var mySidenav = document.getElementById("mySidenav");
    var backdropFiltr = document.getElementById("backdrop-filtr");
    var sideProfileBtn = document.getElementById("sideProfileBtn");
    var content = document.getElementById("content");
    var heroSec = document.getElementById("hero-sec");

    if (mySidenav) {
        mySidenav.style.maxWidth = "250px";
        mySidenav.style.width = "100%";
    }
    if (backdropFiltr) {
        backdropFiltr.style.backgroundColor = "rgba(30,30,40,.88)";
    }
    if (sideProfileBtn) {
        sideProfileBtn.style.display = "none";
    }
    if (content) {
        content.style.left = "-100px";
        content.style.zIndex = "-1";
    }
    if (heroSec) {
        heroSec.style.marginRight = "81px";
    }
}

function closeNav() {
    var mySidenav = document.getElementById("mySidenav");
    var sideProfileBtn = document.getElementById("sideProfileBtn");
    var backdropFiltr = document.getElementById("backdrop-filtr");
    var content = document.getElementById("content");
    var heroSec = document.getElementById("hero-sec");

    if (mySidenav) {
        mySidenav.style.maxWidth = "0";
        mySidenav.style.width = "0";
    }
    if (sideProfileBtn) {
        sideProfileBtn.style.display = "block";
    }
    if (backdropFiltr) {
        backdropFiltr.style.backgroundColor = "unset";
    }
    if (content) {
        content.style.left = "0px";
        content.style.zIndex = "0";
    }
    if (heroSec) {
        heroSec.style.marginRight = "0px";
    }
}