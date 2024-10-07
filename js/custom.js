// Timeline Script
(function($) {
    // console.log("function initialised");
    
    $.fn.timeline = function() {
    //   console.log("timeline entered");
      
      var selectors = {
        id: $(this),
        item: $(this).find(".timeline-item"),
        activeClass: "timeline-item--active",
        img: ".timeline__img"
      };
  
    //   console.log(selectors,"selectors");
  
      // Initialize the first item as active
      var first= selectors.item.eq(0);
    //   console.log(first,"first item");
      selectors.item.eq(0).addClass(selectors.activeClass);
      selectors.id.css(
        "background-image",
        "url(" + selectors.item.first().find(selectors.img).attr("src") + ")"
      );
  
      var options = {
        root: document.getElementById("main-content"),
        rootMargin: "0px",
        threshold: 0.6 // Adjust this threshold to determine when an item is considered "visible"
      };
  
      var observer = new IntersectionObserver(function(entries) {
        // console.log(entries,"entries");
        entries.forEach(function(entry) {
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
  
      selectors.item.each(function() {
        observer.observe(this);
      });
    };
  })(jQuery);
  
  // Initialize the timeline plugin
  $("#timeline-1").timeline();

// Dynamic Viewport Height
function setDynamicHeight() {
    const viewportHeight = window.innerHeight;
    console.log(viewportHeight);

    document.querySelector('#main').style.height= viewportHeight + 'px';
}

setDynamicHeight()
window.addEventListener('resize',setDynamicHeight);