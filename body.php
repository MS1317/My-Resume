<section id="main">
   
      <!-- Side Profile toggle -->
      <div class="side-navbar mw-100 d-flex justify-content-center align-items-start" style="order:1;">
         <span id="sideProfileBtn" class="side-profile-btn d-flex align-items-center" onclick="openSideProfile()"></span>
      </div>

      <!-- The side navigation menu and toggle-->
      <div class="side-navbar nav-shadow" style="order:3">
         <div class="btOn">
            <div id="navBtn" class="openBtn" onclick="openNav()">&#9776;</div>
         </div>
         <div id="mySidenav" class="sidenav" style="max-width: 0px; width: 0px;">
            <div class="sidebar-content">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a>
               <a href="#">About</a>
               <a href="#">Services</a>
               <a href="#">Clients</a>
               <a href="#">Contact</a>
            </div>
         </div>
      </div> 

   <!-- Side Profile -->
   <div id="side-profile-parent" class="side-profile-parent" style="order:1;">
      <div id="mySideProfile" class="side-profile nav-shadow">
         <div id="profile-cont" class="profile-cont">
            <a href="javascript:void(0)" class="closebtn" onclick="closeSideProfile()">&times</a>
            <div id="sideDetails1" class="side-details p-3">
               <img class="me" src="assets\images\IMG_20240105_222611_375.png" alt="img">
               <div class="name-title">
                  <strong>
                     <h6>Manpreet Singh</h6>
                  </strong>
               </div>
               <div class="designation">
                  <ul class="p-1 designation-list m-0">
                     <li>Frontend Developer,</li>
                     <li>React JS,</li>
                     <li>Wordpress,</li>
                     <li>
                        <a class="channel-link" href="http://www.youtube.com/@TechiTuber">
                        <strong><span style="color:white; -webkit-text-stroke: 0.5px black;">Techi</span><span style="color:white; -webkit-text-stroke: 0.5px black; background-color:#f22b0c; border-radius:5px;padding:1px;">Tuber</span></strong> CEO
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <div class="sidebar-scrollable-menu">
               <div id="sideDetails2" class="side-details-2 pt-3 px-3">
                  <table>
                     <tr>
                        <td class="details-head">
                           Residence:
                        </td>
                        <td class="details-data">
                           India
                        </td>
                     </tr>
                     <tr>
                        <td   class="details-head">
                           City:
                        </td>
                        <td class="details-data">
                           Ludhiana
                        </td>
                     </tr>
                     <tr>
                        <td   class="details-head">
                           Age:
                        </td>
                        <td class="details-data">
                           23
                        </td>
                     </tr>
                  </table>
               </div>

                  <hr>

               <div class="progrss-div d-flex justify-content-evenly">  
                  <div class="lang-prog">
                     <circle-progress class="circle" value="100" max="100" 	text-format='percent'></circle-progress>
                     <h6 class="text-center">Punjabi</h6>
                  </div>

                  <div class="lang-prog">
                     <circle-progress class="circle" value="60" max="100" 	text-format='percent'></circle-progress>
                     <h6 class="text-center">Hindi</h6>
                  </div>
               
                  <div class="lang-prog">
                     <circle-progress class="circle" value="80" max="100" 	text-format='percent'></circle-progress>
                     <h6 class="text-center">English</h6>
                  </div>
               </div>

                  <hr>

               <div class="content">
                  <div class="profile-skills">
                     <div>
                           <ul class="skills skills3 p-0 m-0">
                              <li class="sk-css"><span>CSS</span></li>
                              <li class="sk-htm"><span>HTML</span></li>
                              <li class="sk-jav"><span>JS</span></li>
                              <li class="sk-php"><span>PHP</span></li>
                              <li class="sk-sql"><span>SQL</span></li>
                           </ul>
                     </div>
                  </div>
               </div>
         </div>

         <div class="social-links">
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-github"></i>
         </div>
      </div>
   </div>
  
   <!-- Main  Content -->
   <div id="content" class="content" style="overflow-y:scroll!important; order:2; left:0px;">
      <div id="backdrop-filtr" class="backdrop-filter">
      <!-- Hero Section -->
         <div id="intro-sec" class="intro-sec">
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
         </div>
      
         <div class="services">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae dolor libero maxime perferendis maiores qui quaerat quam delectus facere? Saepe in placeat modi aliquam laboriosam alias, officia blanditiis numquam!</p>
         </div>
      </div>   
   </div>


</section>
