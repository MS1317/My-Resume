console.log("Modal function loaded");
// Attach click event to each item-wrapper
function openDialog(index) {
    const dialog = document.getElementById(`web-modal-${index}`);
    const backdrop = document.getElementById(`backdrop-${index}`);
    const navbar = document.querySelector(`.side-navbar.nav-shadow`);
    const sidebar = document.getElementById(`side-profile-parent`);
    const sidebarBtn = document.querySelector(`.side-navbar.mw-100.d-flex.justify-content-center.align-items-start`);

    if (dialog && backdrop) {
        dialog.setAttribute('open', '');
        backdrop.style.display="block";
        navbar.style.zIndex="-1";
        sidebar.style.zIndex="-1";
        sidebarBtn.style.zIndex="0";
    }
    else{
        console.log("Dialog or backdrop not found");
    }
}


// Define the closeDialog function globally
function closeDialog(index) {
    const dialog = document.getElementById(`web-modal-${index}`);
    const backdrop = document.getElementById(`backdrop-${index}`);
    const navbar=document.querySelector(`.side-navbar.nav-shadow`);
    const sidebar=document.getElementById(`side-profile-parent`);
    const sidebarBtn = document.querySelector(`.side-navbar.mw-100.d-flex.justify-content-center.align-items-start`);

    if (dialog && backdrop) {
        dialog.removeAttribute('open');
        backdrop.style.display = 'none';
        navbar.style.zIndex="";
        sidebar.style.zIndex="";
        sidebarBtn.style.zIndex="";

    }
    else{
        console.log("Dialog or backdrop not found");
    }
}
