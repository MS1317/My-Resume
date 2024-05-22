<?php
// Get the value of the 'page' parameter from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define an array of valid pages
$valid_pages = ['home', 'about', 'services', 'clients', 'contact', 'services/video-editing'];

// Check if the requested page is valid, otherwise default to 'home'
if (!in_array($page, $valid_pages)) {
    $page = 'home';
}
?>

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
      <div class="active-page">
      <p></p>
      </div>
      <div id="mySidenav" class="sidenav" style="max-width: 0px; width: 0px;">
         <div class="sidebar-content">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a>
            <a id="home" href="?page=home" onclick="loadContent('home',event)">Home</a>
            <a id="about" href="?page=about" onclick="loadContent('about',event)">About</a>
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
               <img class="me" src="assets\images\IMG_20240105_222611_375.jpg" alt="img">
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
                              <li class="sk-jav"><span>REACT JS & JS</span></li>
                              <li class="sk-sql"><span>WORDPRESS</span></li>
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
   <div class="content" style="overflow-y:scroll!important; order:2;">
      <div id="backdrop-filtr" class="backdrop-filter">
         <div id="content" class="mainContent" style="left:0px;">
            <div id="page-changer" class="c-backdrop">
               <?php
                  // Include the PHP file corresponding to the selected page
                  include("pages/$page.php");
               ?>
            </div> 
         </div>
     </div>   
   </div>

</section>
