<!--------------------------- Navbar------------------------>
<nav class="navbar">
      <div class="navbar-left">
        <!-- linkedin Logo -->
        <a href="index.html" class="logo">
          <img src="<?php  bloginfo('template_directory')?>/images/logo.png" alt="logo image">
        </a>
        <div class="search-box">
            <img src="<?php  bloginfo('template_directory')?>/images/search.png" alt="search image">
            <input type="text" placeholder="Search">
        </div>
      </div>
      <div class="navbar-center">
         <!-- Menulist  -->
        <!-- <ul>
          <li><a href="#" class="active"><img src="<?php  bloginfo('template_directory')?>/images/home.png" alt="Home image"><span>Home</span></a></li>
          <li><a href="#"><img src="<?php  bloginfo('template_directory')?>/images/network.png" alt="Home image"><span>My Network</span></a></li>
          <li><a href="#"><img src="<?php  bloginfo('template_directory')?>/images/jobs.png" alt="Home image"><span>Jobs</span></a></li>
          <li><a href="#"><img src="<?php  bloginfo('template_directory')?>/images/message.png" alt="Home image"><span>Messaging</span></a></li>
          <li><a href="#"><img src="<?php  bloginfo('template_directory')?>/images/notification.png" alt="Home image"><span>Notifications</span></a></li>
        </ul> -->
        <!-- getting the menu from the WP dashboard -->
        <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu-class'=>'custom-nav'))  ?>


      </div>



      <div class="navbar-right">
        <div class="online">
           <!-- user image -->
        <img src="<?php  bloginfo('template_directory')?>/images/profile-pic.jpg" alt="User image" class="nav-profile-img" onclick="toggleMenu()">
        </div>
      </div>
      <!-------------------- Profile dropdown Menu ------------------->
      <div class="profile-menu-wrap" id="profile-menu">
        <div class="profile-menu">
          <div class="user-info">
            <img src="<?php  bloginfo('template_directory')?>/images/profile-pic.jpg" alt="">
            <div>
              <h3>Akshata</h3>
              <a href="profile.html">See your profile</a>
            </div>
          </div>
          <hr>
          <a href="#" class="profile-menu-link">
            <img src="<?php  bloginfo('template_directory')?>/images/feedback.png">
            <p>Give Feedback</p>
            <span>></span>
          </a>
          <a href="#" class="profile-menu-link">
            <img src="<?php  bloginfo('template_directory')?>/images/setting.png">
            <p>Settings & Privacy</p>
            <span>></span>
          </a>
          <a href="#" class="profile-menu-link">
            <img src="<?php  bloginfo('template_directory')?>/images/help.png">
            <p>Help& Support</p>
            <span>></span>
          </a>
          <a href="#" class="profile-menu-link">
            <img src="<?php  bloginfo('template_directory')?>/images/display.png">
            <p>Display & Accessibility</p>
            <span>></span>
          </a>
          <a href="#" class="profile-menu-link">
            <img src="<?php  bloginfo('template_directory')?>/images/logout.png">
            <p>Logout</p>
            <span>></span>
          </a>
        </div>
      </div>
    </nav>