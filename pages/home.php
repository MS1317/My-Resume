<?php
// Ensure config.php is included either directly or via index.php
if (!defined('BASE_PATH')) {
    require('../config.php');  // Adjust the path as needed based on your directory structure
}
?>
      <!-- Hero Section -->
               <div id="intro-overlay" class="intro-overlay">
                  <div id="hero-sec" class="hero-sec">
                     <div id="hero-overlay" class="hero-overlay">
                        <div class="hero-content">
                              <h1 class="hero-head">Discover my amazing workspace</h1>
                              
                              <div class="wrapper">
                                 <h6 class="effect-wrapper">
                                    I am
                                    <<span class="typed-text-tag">code</span>>
                                    <span id="typed"></span>
                                    <span class="cursor">&nbsp;</span>
                                    <<span class="typed-text-tag">/code</span>>
                                 </h6>
                              </div>
                              
                              <a href="#" class="hero-btn">
                                 Explore
                              </a>

                              <span>
                                 <img class="hero-img" src="assets/images/Untitled-1.png" >
                              </span>
                        </div>
                     </div>
                  </div>

                  <div class="stats">
                     <h3 class="years">Years Experience</h3>
                     <h3 class="projects">Projects Completed</h3>
                     <!-- <h3 class="customers"></h3> -->
                  </div>
               </div>
      <!-- Home Content -->
         <div class="page-content services pt-0">   
            <!-- Service Section -->
            <section class="services-sec">
               <div class="service-content">
               <?php require $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/fetch_data.php'; ?>
                  <?php if (!empty($cardData)) {
                    foreach($cardData as $data): ?>
                    <a class="service-card" href="?page=services/<?php echo $data['page'];?>" onclick="loadContent('services/<?php echo $data['page']; ?>',event)">
                        <div>
                           <div class="serv-icon">
                              <img class="serv-img" src="<?php echo $data["icon_src"]; ?>" alt="">
                              <div class="big-circle"></div>
                           </div>
                           <h5> <?php echo $data["title"]; ?> </h5>
                           <p> <?php echo $data["description"]; ?> </p>
                        </div>
                        <button href="?page=services/<?php echo $data['page'];?>" onclick="loadContent('services/<?php echo $data['page']; ?>',event)">View more</button>
                    </a>
                  <?php endforeach;
                  }

                  else{
                     echo "No Data Found";
                  }
                  ?>
                  </div>
            </section>
         </div>
         <div class="timeline-container" id="timeline-1">
            <div class="timeline-header">
               <h2 class="timeline-header__title">My journey so far</h2>
               <h3 class="timeline-header__subtitle">Career & Education</h3>
            </div>
            <div class="timeline">
               <div class="timeline-item 1" data-text="Frontend Developer at Evolvan">
                     <div class="timeline__content"><img class="timeline__img" src="assets/timeline/Snapchat-1136696124.jpg" />
                        <h2 class="timeline__content-title">May 2023 - Present</h2>
                        <p class="timeline__content-desc"> Contributing to the development of dynamic, responsive web applications. My role involves working closely with backend developers, designers, and other team members to create seamless user experiences. I specialize in implementing intuitive UI/UX designs using modern frameworks such as React.js, ensuring code efficiency, and maintaining best practices in web development.</p>
                     </div>
               </div>
               <div class="timeline-item 2" data-text="Bachelors in Computer & Application">
                     <div class="timeline__content"><img class="timeline__img" src="assets/timeline/172825936177.jpg" />
                        <h2 class="timeline__content-title">2019-21</h2>
                        <p class="timeline__content-desc">I completed my Bachelor of Computer Applications (BCA) from PCTE, where I gained foundational knowledge in software development, web technologies, and programming languages. My education has played a key role in shaping my problem-solving skills and technical expertise.</p>
                     </div>
               </div>
            </div>
         </div>