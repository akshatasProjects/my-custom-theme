<!-- gets the path of the theme  -->
<!-- <?php //echo get_template_directory_uri();  
  // bloginfo("template_directory");?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LinkedIn Clone Project</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/CSS/styles.css">
  
</head>
<body>
<?php 
  get_header();
?>

    <!-------------------------------SIDEBARS-------------------------------->
     <div class="container">
      <div class="left-sidebar">
        <div class="sidebar-profile-box">
          <img src="<?php  bloginfo('template_directory')?>/images/cover-pic.png" alt="cover image" width="100%">
          <div class="sidebar-profile-info">
            <img src="<?php  bloginfo('template_directory')?>/images/profile-pic.jpg" alt="Profile Image">
            <h1>Akshata</h1>
            <h3>Frontend Developer</h3>
            <ul>
              <li>Your Profile Views <span>52</span></li>
              <li>Your Post Views <span>529</span></li>
              <li>Your Connection <span>134</span></li>
            </ul>
          </div>
          <!-- sidebar-profile-link -->
          <div class="sidebar-profile-link">
            <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/items.png" alt="Image Item">My items</a>
            <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/premium.png" alt="Premium image">Try Premium</a>
          </div>
        </div>
        <!-- Sidebar Activity -->
        <div class="sidebar-activity" id="sidebarActivity">
          <h3>RECENT</h3>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/recent.png" alt="recent activity">Web Development</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/recent.png" alt="recent activity">User Interface</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/recent.png" alt="recent activity">Online Learning</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/recent.png" alt="recent activity">Learn Online</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/recent.png" alt="recent activity">Code Better </a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/recent.png" alt="recent activity">Group Learning</a>
          
          <h3>GROUPS</h3>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/group.png" alt="recent activity">Web Design Group</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/group.png" alt="recent activity">HTML & CSS Learners</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/group.png" alt="recent activity">Python & JavaScript Group</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/group.png" alt="recent activity">Learn Coding Online</a>

          <h3>HASHTAG</h3>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/hashtag.png" alt="recent activity">webdevelopment</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/hashtag.png" alt="recent activity">userinterface</a>
          <a href="#"><img src="<?php  bloginfo('template_directory')?>/images/hashtag.png" alt="recent activity">onlinelearning</a>

          <!-- DISCOVER MORE LINK -->
          <div class="discover-more-link">
            <a href="#">Discover More</a>
          </div>
        </div>

        <p id="show-more-link" onclick="toggleLink()">Show more <b>+</b></p>

      </div>
      <!-- ------------------------MAIN CONTENT SIDEBAR----------------------------------- -->
      <div class="main-content">
        <!--------------------Post Section-------------------------->
        <div class="create-post">
          <div class="create-post-input">
            <img src="<?php  bloginfo('template_directory')?>/images/profile-pic.jpg" alt="">
            <textarea rows="2" placeholder="Write a post"></textarea>
          </div>
          <div class="create-post-links">
            
              <li><img src="<?php  bloginfo('template_directory')?>/images/photo.png" alt="">Photo</li>
              <li><img src="<?php  bloginfo('template_directory')?>/images/video.png" alt="">Video</li>
              <li><img src="<?php  bloginfo('template_directory')?>/images/event.png" alt="">Event</li>
              <li>Post</li>
          </div>
        </div>

        <!--------------------------SORT BY--------------------------------->
        <div class="sort-by">
          <hr>
          <p>Sort By: <span>top <img src="<?php  bloginfo('template_directory')?>/images/down-arrow.png" alt=""></span></p>
        </div>

        <!--------------------------POST SECTION------------------------------------>
        <div class="post">
          <div class="post-author">
            <img src="<?php  bloginfo('template_directory')?>/images/user-4.png" alt="">
            <div>
              <h1>Clarance  Joe</h1>
              <small>Founder and CEO at Gellelio Group | Angel Investor</small>
              <small>2 hours ago</small>
            </div>
          </div>
           <!--POST CONTENT-->
          <p>The Success of every websites depends on search engine optimization(SEO) and digital marketing strategy.
            If you are on top in all major search engines then you are ahead among your competitors.
          </p>
          <img src="<?php  bloginfo('template_directory')?>/images/post-image-2.png" width="100%" alt="">

          <!-- LIKE SHARE button -->
          <div class="post-stats">
            <div>
              <img src="<?php  bloginfo('template_directory')?>/images/thumbsup.png" alt="">
              <img src="<?php  bloginfo('template_directory')?>/images/love.png" alt="">
              <img src="<?php  bloginfo('template_directory')?>/images/clap.png" alt="">
              <span class="liked-users">Neesha Mishra and 23 others</span>
            </div>
            <div>
              <span>22 comments &middot; 40 shares</span>
            </div>
          </div> 
          <!-- post Activities -->
          <div class="post-activity">
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/user-1.png" class="post-activity-user-icon">
              <img src="<?php  bloginfo('template_directory')?>/images/down-arrow.png" class="post-activity-arrow-icon">
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/like.png" alt="">
              <span>Like</span>
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/comment.png" alt="">
              <span>Comment</span>
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/share.png" alt="">
              <span>Share</span>
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/send.png" alt="">
              <span>Send</span>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="post-author">
            <img src="<?php  bloginfo('template_directory')?>/images/user-3.png" alt="">
            <div>
              <h1>Benjamin Leo</h1>
              <small>Founder and CEO at Gellelio Group | Angel Investor</small>
              <small>2 hours ago</small>
            </div>
          </div>
           <!--POST CONTENT-->
          <p>The Success of every websites depends on search engine optimization(SEO) and digital marketing strategy.
            If you are on top in all major search engines then you are ahead among your competitors.
          </p>
          <img src="<?php  bloginfo('template_directory')?>/images/post-image-1.png" width="100%" alt="">

          <!-- LIKE SHARE button -->
          <div class="post-stats">
            <div>
              <img src="<?php  bloginfo('template_directory')?>/images/thumbsup.png" alt="">
              <img src="<?php  bloginfo('template_directory')?>/images/love.png" alt="">
              <img src="<?php  bloginfo('template_directory')?>/images/clap.png" alt="">
              <span class="liked-users">Neesha Mishra and 23 others</span>
            </div>
            <div>
              <span>22 comments &middot; 40 shares</span>
            </div>
          </div> 
          <!-- post Activities -->
          <div class="post-activity">
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/user-1.png" class="post-activity-user-icon">
              <img src="<?php  bloginfo('template_directory')?>/images/down-arrow.png" class="post-activity-arrow-icon">
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/like.png" alt="">
              <span>Like</span>
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/comment.png" alt="">
              <span>Comment</span>
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/share.png" alt="">
              <span>Share</span>
            </div>
            <div class="post-activity-link">
              <img src="<?php  bloginfo('template_directory')?>/images/send.png" alt="">
              <span>Send</span>
            </div>
          </div>
        </div>
      </div>
      <!-- ------------------------RIGHT SIDEBAR----------------------------------- -->
      <div class="right-sidebar">
        <div class="sidebar-news">
          <img src="<?php  bloginfo('template_directory')?>/images/more.png" alt="Info Icon" class="info-icon">
          <h3>Trending News</h3>
          
          <a href="#">High demand for skilled manpower</a>
          <span>1d ago &middot; 10,934 readers</span>
          
          <a href="#">Careers growing Horizontally too</a>
          <span>19h ago &middot; 1,552 readers</span>

          <a href="#">Less work visa for US, more for UK</a>
          <span>1d ago &middot; 27,934 readers</span>

          <a href="#">More hiring = higher confidence?</a>
          <span>18h ago &middot; 8,906 readers</span>
          
          <a href="#">Gautam Adani is the world's third richest</a>
          <span>12h ago &middot; 4,305 readers</span>

          <a href="#" class="read-more-link">Read More</a>
        </div>
        <!---------Advertisement----------->
        <div class="sidebar-ad">
          <small>Ad &middot; &middot; &middot;</small>
          <p>Master the 5 principles of web design</p>
          <div>
            <img src="<?php  bloginfo('template_directory')?>/images/user-1.png" alt="">
            <img src="<?php  bloginfo('template_directory')?>/images/mi-logo.png" alt="">
          </div>
          <strong>Brand and Demand in Xiaomi</strong>
          <a href="#" class="ad-link">Learn More</a>
        </div>


        <!-- FOOTER -->
        <?php
          get_footer();
        ?>

      </div>
     </div>


  <script src="script.js"></script>
  
</body>
</html>