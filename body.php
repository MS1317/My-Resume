<!-- Hero  Section -->
<section id="main">
   <div class="side-navbar mw-100 d-flex">
      <i id="sideProfileBtn"class="side-profile-btn fas fa-ellipsis-v" onclick="openSideProfile()"></i>
      <span id="navBtn" class="openBtn" onclick="openNav()">&#9776;</span>
   </div>
   <!-- Side Profile -->
   <div id="side-profile-parent" class="side-profile-parent">
      <div id="mySideProfile" class="side-profile">
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
                     
            <div id="sideDetails2" class="side-details-2 p-3">
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

            <circle-progress value="60" max="100" 	text-format='percent'></circle-progress>

            <circle-progress value="70" max="100" 	text-format='percent'></circle-progress>
<!-- 
            <circle-progress value="80" max="100" 	text-format='percent'></circle-progress>

            <circle-progress value="50" max="100" 	text-format='percent'></circle-progress> -->

         </div>
      </div>
   </div>
   </div>
   <section id="intro-sec" class="intro-sec">
      <div class="intro-overlay">
         <div id="hero-sec" class="hero-sec">
            <div class="hero-overlay">
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
                  <img class="hero-img" src="assets/images/Untitled-1.png" >
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="side-navbar mh-100">
      <div class="btOn">
         <div class="openBtn" onclick="openNav()">&#9776;</div>
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
</section>
<!-- The side navigation menu -->