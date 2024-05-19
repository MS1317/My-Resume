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
                              
                              <button class="hero-btn">
                                 <strong>
                                 Explore
                                 </strong>
                              </button>

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
               <?php require $_SERVER['DOCUMENT_ROOT'] . '/mscv/fetch_data.php'; ?>
                  <?php if (!empty($cardData)) {
                    foreach($cardData as $data): ?>
                     <div class="service-card">
                        <div class="serv-icon">
                           <img class="serv-img" src="<?php echo $data["icon_src"]; ?>" alt="">
                        <div class="big-circle"></div>
                        </div>
                        <h5> <?php echo $data["title"]; ?></h5>
                        <p> <?php echo $data["description"]; ?></p>
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