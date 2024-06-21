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
                     <div class="service-card">
                        <div>
                           <div class="serv-icon">
                              <img class="serv-img" src="<?php echo $data["icon_src"]; ?>" alt="">
                           <div class="big-circle"></div>
                           </div>
                           <h5> <?php echo $data["title"]; ?></h5>
                           <p> <?php echo $data["description"]; ?></p>
                        </div>

                        <button href="?page=services/<?php echo $data['page'];?>" onclick="loadContent('services/<?php echo $data['page']; ?>',event)">View more</button>
                     </div>
                  <?php endforeach;
                  }

                  else{
                     echo "No Data Found";
                  }
                  ?>
                  </div>
            </section>
         </div>