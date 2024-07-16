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
        backdrop.style.display = "block";
        navbar.style.zIndex = "-1";
        sidebar.style.zIndex = "-1";
        sidebarBtn.style.zIndex = "0";
        
        // Loop through all view more arrows and set z-index to -1
        viewMoreArrows.forEach(arrow => {
            arrow.style.zIndex = '-1';
        });

        // Add fade-in class to backdrop and dialog
        backdrop.classList.add('fade-in');
        dialog.classList.add('fade-in');
    } else {
        console.log("Dialog or backdrop not found");
    }

    bgImgScroller(dialogBg, 5000);
}

// Define the closeDialog function globally
function closeDialog(index) {
    const dialogId = `web-modal-${index}`;
    const dialog = document.getElementById(dialogId);
    const backdrop = document.getElementById(`backdrop-${index}`);
    const navbar = document.querySelector(`.side-navbar.nav-shadow`);
    const sidebar = document.getElementById(`side-profile-parent`);
    const sidebarBtn = document.querySelector(`.side-navbar.mw-100.d-flex.justify-content-center.align-items-start`);
    const viewMoreArrows = document.querySelectorAll('.view-more.arrow-right');

    if (dialog && backdrop) {
        // Add fade-out class to backdrop and dialog
        backdrop.classList.remove('fade-in');
        dialog.classList.remove('fade-in');
        backdrop.classList.add('fade-out');
        dialog.classList.add('fade-out');

        // Wait for the fade-out animation to complete before hiding the elements
        setTimeout(() => {
            dialog.removeAttribute('open');
            backdrop.style.display = 'none';
            navbar.style.zIndex = "";
            sidebar.style.zIndex = "";
            sidebarBtn.style.zIndex = "";
            // Loop through all view more arrows and reset z-index
            viewMoreArrows.forEach(arrow => {
                arrow.style.zIndex = '';
            });

            // Remove fade-out class
            backdrop.classList.remove('fade-out');
            dialog.classList.remove('fade-out');
        }, 500); // Adjust the timing to match the CSS transition duration
    } else {
        console.log("Dialog or backdrop not found");
    }
}

function bgImgScroller(dialogBg, duration) {
    if (dialogBg) {
        dialogBg.style.transition = `background-position ${duration}ms ease-in-out`;
        dialogBg.style.backgroundPosition = 'top';
        setTimeout(() => {
            // Scroll from top to bottom after 2 seconds
            dialogBg.style.backgroundPosition = 'bottom';
        }, 2000); // Adjust timing as needed
    } else {
        console.log('Background image element not found');
    }
}
