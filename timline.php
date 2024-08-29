<style>
.timeline {
  display: flex;
  margin: 0 auto;
  flex-wrap: wrap;
  flex-direction: column;
  max-width: 700px;
  position: relative;
}
.timeline__content-title {
  font-weight: normal;
  font-size: 66px;
  margin: -10px 0 0 0;
  transition: 0.4s;
  padding: 0 10px;
  box-sizing: border-box;
  font-family: 'Pathway Gothic One', sans-serif;
  color: #fff;
}
.timeline__content-desc {
  margin: 0;
  font-size: 15px;
  box-sizing: border-box;
  color: rgba(255, 255, 255, 0.7);
  font-family: Cardo;
  font-weight: normal;
  line-height: 25px;
}
.timeline:before {
  position: absolute;
  left: 50%;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  content: "";
  background: rgba(255, 255, 255, 0.07);
}
@media only screen and (max-width: 767px) {
  .timeline:before {
    left: 40px;
  }
}
.timeline-item {
  padding: 40px 0;
  opacity: 0.3;
  filter: blur(2px);
  transition: 0.5s;
  box-sizing: border-box;
  width: calc(50% - 40px);
  display: flex;
  position: relative;
  transform: translateY(-80px);
}
.timeline-item:before {
  content: attr(data-text);
  letter-spacing: 3px;
  width: 100%;
  position: absolute;
  color: rgba(255, 255, 255, 0.5);
  font-size: 13px;
  font-family: 'Pathway Gothic One', sans-serif;
  border-left: 2px solid rgba(255, 255, 255, 0.5);
  top: 70%;
  margin-top: -5px;
  padding-left: 15px;
  opacity: 0;
  right: calc(-100% - 56px);
}
.timeline-item:nth-child(even) {
  align-self: flex-end;
}
.timeline-item:nth-child(even):before {
  right: auto;
  text-align: right;
  left: calc(-100% - 56px);
  padding-left: 0;
  border-left: none;
  border-right: 2px solid rgba(255, 255, 255, 0.5);
  padding-right: 15px;
}
.timeline-item--active {
  opacity: 1;
  transform: translateY(0);
  filter: blur(0px);
}
.timeline-item--active:before {
  top: 50%;
  transition: 0.3s all 0.2s;
  opacity: 1;
}
.timeline-item--active .timeline__content-title {
  margin: -50px 0 20px 0;
}
@media only screen and (max-width: 767px) {
  .timeline-item {
    align-self: baseline !important;
    width: 100%;
    padding: 0 30px 150px 80px;
  }
  .timeline-item:before {
    left: 10px !important;
    padding: 0 !important;
    top: 50px;
    text-align: center !important;
    width: 60px;
    border: none !important;
  }
  .timeline-item:last-child {
    padding-bottom: 40px;
  }
}
.timeline__img {
  width: 100%;
  max-width: 100%;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.4);
}
.timeline-container {
  width: 100%;
  position: relative;
  padding: 80px 0;
  transition: 0.3s ease 0s;
  background-attachment: fixed;
  background-size: cover;
}
.timeline-container:before {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgb(36 36 46 / 95%);
  content: "";
}
.timeline-header {
  width: 100%;
  text-align: center;
  margin-bottom: 80px;
  position: relative;
}
.timeline-header__title {
  color: #fff;
  font-size: 46px;
  font-family: Cardo;
  font-weight: normal;
  margin: 0;
}
.timeline-header__subtitle {
  color: rgba(255, 255, 255, 0.5);
  font-family: 'Pathway Gothic One', sans-serif;
  font-size: 16px;
  letter-spacing: 5px;
  margin: 10px 0 0 0;
  font-weight: normal;
}
.demo-footer {
  padding: 60px 0;
  text-align: center;
}
.demo-footer a {
  color: #999;
  display: inline-block;
  font-family: Cardo;
}
</style>
<div class="timeline-container" id="timeline-1">
    <div class="timeline-header">
        <h2 class="timeline-header__title">My journey so far</h2>
        <h3 class="timeline-header__subtitle">Career & Education</h3>
    </div>
    <div class="timeline">
        <div class="timeline-item 1" data-text="FATHER OF THE TURKS">
            <div class="timeline__content"><img class="timeline__img" src="assets/timeline/photo_2024-08-04_18-20-32.jpg" />
                <h2 class="timeline__content-title">1881</h2>
                <p class="timeline__content-desc">He was born in 1881 (probably in the spring) in Salonica, then an Ottoman city, now inGreece. His father Ali Riza, a customs official turned lumber merchant, died when Mustafawas still a boy. His mother Zubeyde, adevout and strong-willed
                    woman, raised him and his sister.</p>
            </div>
        </div>
        <div class="timeline-item 2" data-text="FATHER OF THE TURKS">
            <div class="timeline__content"><img class="timeline__img" src="assets/timeline/Snapchat-1136696124.jpg" />
                <h2 class="timeline__content-title">1893</h2>
                <p class="timeline__content-desc">First enrolled in a traditionalreligious school, he soon switched to a modern school. In 1893, he entered a military highschool where his mathematics teacher gave him the second name Kemal (meaning perfection)in recognition of young Mustafa's
                    superior achievement.</p>
            </div>
        </div>
    </div>
</div>

<script>
(function($) {
  console.log("function initialised");
  
  $.fn.timeline = function() {
    console.log("timeline entered");
    
    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img"
    };

    console.log(selectors,"selectors");

    // Initialize the first item as active
    var first= selectors.item.eq(0);
    console.log(first,"first item");
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" + selectors.item.first().find(selectors.img).attr("src") + ")"
    );

    var options = {
      root: document.getElementById("main-content"),
      rootMargin: "0px",
      threshold: 0.3 // Adjust this threshold to determine when an item is considered "visible"
    };

    var observer = new IntersectionObserver(function(entries) {
      console.log(entries,"entries");
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var target = $(entry.target);
          selectors.id.css(
            "background-image",
            "url(" + target.find(selectors.img).attr("src") + ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          target.addClass(selectors.activeClass);
        } else {
          $(entry.target).removeClass(selectors.activeClass);
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
</script>

