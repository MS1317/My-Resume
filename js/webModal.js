console.log("Modal function loaded");
// Attach click event to each item-wrapper
function openDialog(index) {
    const dialogId = `web-modal-${index}`;
    const dialog = document.getElementById(dialogId);
    const backdrop = document.getElementById(`backdrop-${index}`);
    const navbar = document.querySelector(`.side-navbar.nav-shadow`);
    const sidebar = document.getElementById(`side-profile-parent`);
    const sidebarBtn = document.querySelector(`.side-navbar.mw-100.d-flex.justify-content-center.align-items-start`);
    const dialogBg = document.querySelector(`#backdrop-${index} .web-bg-cover`);
    const viewMoreArrows = document.querySelectorAll('.view-more.arrow-right');


    if (dialog && backdrop) {
        dialog.setAttribute('open', '');
        backdrop.style.display="block";
        navbar.style.zIndex="-1";
        sidebar.style.zIndex="-1";
        sidebarBtn.style.zIndex="0";
        // Loop through all view more arrows and set z-index to -1
        viewMoreArrows.forEach(arrow => {
            arrow.style.zIndex = '-1';
        });    
    }
    else{
        console.log("Dialog or backdrop not found");
    }

    bgImgScroller(dialogBg, 5000);
}


// Define the closeDialog function globally
function closeDialog(index) {
    const dialogId = `web-modal-${index}`;
    const dialog = document.getElementById(dialogId);
    const backdrop = document.getElementById(`backdrop-${index}`);
    const navbar=document.querySelector(`.side-navbar.nav-shadow`);
    const sidebar=document.getElementById(`side-profile-parent`);
    const sidebarBtn = document.querySelector(`.side-navbar.mw-100.d-flex.justify-content-center.align-items-start`);
    const viewMoreArrows = document.querySelectorAll('.view-more.arrow-right');


    if (dialog && backdrop) {
        dialog.removeAttribute('open');
        backdrop.style.display = 'none';
        navbar.style.zIndex="";
        sidebar.style.zIndex="";
        sidebarBtn.style.zIndex="";
        // Loop through all view more arrows and set z-index to -1
        viewMoreArrows.forEach(arrow => {
            arrow.style.zIndex = '';
        });     }
    else{
        console.log("Dialog or backdrop not found");
    }
}

function bgImgScroller(dialogBg ,duration ) {
        if (dialogBg) {
            dialogBg.style.transition = `background-position ${duration}ms ease-in-out`;
            dialogBg.style.backgroundPosition = 'top';
            setTimeout(() => {
                // Scroll from top to bottom after 2 seconds
                dialogBg.style.backgroundPosition = 'bottom';
            }, 2000); // Adjust timing as needed
        }
        else {
            console.log(`Background image element not found in dialog ${dialogId}`);
        }
    }

