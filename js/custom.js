// Timeline Script
(function ($) {
  // console.log("function initialised");

  $.fn.timeline = function () {
    // console.log("timeline entered");

    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img",
    };

    // console.log(selectors,"selectors");

    // Initialize the first item as active
    var first = selectors.item.eq(0);
    // console.log(first,"first item");
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" + selectors.item.first().find(selectors.img).attr("src") + ")"
    );

    var options = {
      root: document.getElementById("main-content"),
      rootMargin: "0px",
      threshold: 0.6, // Adjust this threshold to determine when an item is considered "visible"
    };

    var observer = new IntersectionObserver(function (entries) {
      // console.log(entries,"entries");
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var target = $(entry.target);
          selectors.id.css(
            "background-image",
            "url(" + target.find(selectors.img).attr("src") + ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          target.addClass(selectors.activeClass);
        }
      });
    }, options);

    selectors.item.each(function () {
      observer.observe(this);
    });
  };
})(jQuery);

// Initialize the timeline plugin
$("#timeline-1").timeline();

// Dynamic Viewport Height
function setDynamicHeight() {
  // console.log("height adjusted");
  const viewportHeight = window.innerHeight;
  if (window.innerWidth >= 769) {
    const adjustedHeight = viewportHeight - 20;
    document.querySelector("#main").style.height = adjustedHeight + "px";
  } else {
    const adjustedHeight = viewportHeight;
    document.querySelector("#main").style.height = adjustedHeight + "px";
  }
  // console.log(viewportHeight);
}

setDynamicHeight();
window.addEventListener("resize", setDynamicHeight);

function setCopyrightYear() {
  const year = new Date().getFullYear();
  const copyrightElement = document.querySelector(
    ".copyright-parent #copyright"
  );

  if (copyrightElement) {
    // Check if the text already contains the current year to prevent duplicates
    if (!copyrightElement.innerHTML.includes(`${year}`)) {
      copyrightElement.innerHTML += `<span> &copy; ${year} All rights reserved </span>`;
    }
  } else {
    console.error("Copyright element not found.");
  }
}

// Automatically call on DOMContentLoaded
document.addEventListener("DOMContentLoaded", setCopyrightYear);

// Manually trigger the function if needed
// Uncomment the following line to call it manually without duplication:
// setCopyrightYear();

$(document).ready(function () {
  $(".service-drop").click(function () {
    console.log("click");

    const icon = $(".fa-solid.fa-caret-right");
    
    // Toggle rotation by checking if it's already rotated
    if (icon.css("transform") === "none") {
      icon.css("transform", "rotate(90deg)");
    } else {
      icon.css("transform", "none");
    }

    $(".serv-item").toggle(500);
  });
});

