<?php
require_once ("interface.php");
display_head ("Blog - HWA");
?>
<body class="sidebar-show sidebar-right menu-standard is-header-standard body-wide">
<!-- Wrapper -->
<div id="wrapper">
  <!-- Site Content -->
  <div class="site-content">
    <!-- Header -->
    <?php
display_header("blog");
?>
    <!-- /Header -->
    <!-- Header Breadcrumbs -->
    <div id="header-breadcrumbs">
      <div class="content-container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs"> <a class="breadcrumbs-item home" href="index.php">Home</a><span class="sep"></span><span class="breadcrumbs-el current">Blog</span> </div>
        <!-- Breadcrumbs -->
      </div>
    </div>
    <!-- /Header Breadcrumbs -->
    <!-- Side Info -->
    <div id="side-info">
      <div id="top-toggle">
        <div class="search-button icon-search"></div>
        <div class="socials-button icon-share"></div>
      </div>
      <div id="socials-wrap-fixed">
        <div class="socials-wrap">
          <div class="socials-title">Social Media</div>
          <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_twitter"><span class="icon-twitter">twitter</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_facebook"><span class="icon-facebook">facebook</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_gplus"><span class="icon-gplus">gplus</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_tumblr"><span class="icon-tumblr">tumblr</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_instagram"><span class="icon-instagram">instagram</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_pinterest"><span class="icon-pinterest">pinterest</span></a></span> </div>
        <span class="socials-close icon-close"></span> </div>
      <div id="search-form-wrap-fixed">
        <form method="get" class="search-form" action="#">
          <input type="text" class="search-field" value="" name="s" placeholder="Search">
          <button type="submit" class="search-submit" title="Start search"></button>
        </form>
        <span class="search-close icon-close"></span> </div>
    </div>
    <!-- /Side Info -->
    <!-- Page Content Wrap -->
    <div id="page-content-wrap">
      <div class="content-wrap">
        <!-- Content -->
        <div class="content">
          <article class="post-article post-layout-standard post-format-standard has-post-thumbnail">
            <div class="post-featured standard">
              <div class="post-category"><a href="blog.html" title="View all posts in Blog">Blog</a><a href="blog.html" title="View all posts in Church">Church</a></div>
              <a href="images/pic21.jpg" class="zoom"><img src="images/pic21-770x460.jpg" alt="Simple Steps for Creating an Inspirational Newsletter" /></a>
              <div class="blog-post-share">
                <div class="socials-wrap socials-drop"> <a href="#" class="share-links icon-share-option"></a> <span class="social-items"> <span class="social-item"> <a href="#" class="social-icons social_mail"><span class="icon-mail"></span></a> </span> <span class="social-item"> <a href="#" class="social-icons social_gplus"> <span class="icon-gplus"></span> </a> </span> <span class="social-item"> <a href="#" class="social-icons social_facebook"> <span class="icon-facebook"></span> </a> </span> <span class="social-item"> <a href="#" class="social-icons social_twitter"> <span class="icon-twitter"></span> </a> </span> <span class="social-item"> <a href="#" class="social-icons social_tumblr"> <span class="icon-tumblr"></span> </a> </span> </span> </div>
              </div>
            </div>
            <div class="post-header">
              <h2 class="post-title"><a href="post.html">Simple Steps for Creating an Inspirational Newsletter</a></h2>
              <div class="post-counters">
                <div class="post-counters-item post-date"> <span class="date">October 24, 2016</span> </div>
                <span class="sep"></span> <a href="post.html" class="post-counters-item post-counters-views icon-eye"><span class="post-counters-number">687</span></a><span class="sep"></span> <a href="post.html#comments" class="post-counters-item icon-comments"><span class="post-counters-number">3</span></a> </div>
            </div>
            <div class="post-content">
              <p>Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices magna vel imperdiet. Donec eu ex&hellip;</p>
              <a class="article-link mt-button animate-out color-1" href="post.html">Read More</a> </div>
          </article>
          <article class="post-article post-layout-standard post-format-video format-video has-post-thumbnail">
            <div class="post-featured">
              <iframe src="https://player.vimeo.com/video/58448516?color=ffffff" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <div class="post-header">
              <h2 class="post-title"><a href="video-post.html">Video Post</a></h2>
              <div class="post-counters">
                <div class="post-counters-item post-date"> <span class="date">October 20, 2016</span> </div>
                <span class="sep"></span> <a href="video-post.html" class="post-counters-item post-counters-views icon-eye"><span class="post-counters-number">12</span></a><span class="sep"></span> <a href="video-post.html#respond" class="post-counters-item icon-comments"><span class="post-counters-number">0</span></a> </div>
            </div>
            <div class="post-content">
              <p>Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at. Vestibulum dapibus arcu lobortis, mattis est sed, accumsan tortor. Integer porttitor libero rhoncus odio mollis,&hellip;</p>
              <a class="article-link mt-button animate-out color-1" href="video-post.html">Read More</a> </div>
          </article>
          <article class="post-article post-layout-standard post-format-gallery format-gallery has-post-thumbnail">
            <div class="post-featured-gallery">
              <div class='gallery gallery-columns-3'>
                <figure class='gallery-item'>
                  <div class='gallery-icon'> <a href='images/pic36.jpg'><img src="images/pic36-250x250.jpg" alt="" /></a> </div>
                  <figcaption class='theme-caption-text gallery-caption'> Pastor</figcaption>
                </figure>
                <figure class='gallery-item'>
                  <div class='gallery-icon'> <a href='images/typography-1.jpg'><img src="images/typography-1-250x250.jpg" alt="" /></a> </div>
                  <figcaption class='theme-caption-text gallery-caption'> Prayer</figcaption>
                </figure>
                <figure class='gallery-item'>
                  <div class='gallery-icon'> <a href='images/stones-at-each-other-picjumbo-com.jpg'><img src="images/stones-at-each-other-picjumbo-com-250x250.jpg" alt="" /></a> </div>
                  <figcaption class='theme-caption-text gallery-caption'> Faith</figcaption>
                </figure>
              </div>
            </div>
            <div class="post-header">
              <h2 class="post-title"><a href="gallery-post.html">The Faith of the Heart</a></h2>
              <div class="post-counters">
                <div class="post-counters-item post-date"> <span class="date">October 19, 2016</span> </div>
                <span class="sep"></span> <a href="gallery-post.html" class="post-counters-item post-counters-views icon-eye"><span class="post-counters-number">48</span></a><span class="sep"></span> <a href="gallery-post.html#comments" class="post-counters-item icon-comments"><span class="post-counters-number">1</span></a> </div>
            </div>
            <div class="post-conten">
              <p>Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at. Vestibulum dapibus arcu lobortis, mattis est sed, accumsan tortor. Integer porttitor libero rhoncus odio mollis,&hellip;</p>
              <a class="article-link mt-button animate-out color-1" href="gallery-post.html">Read More</a> </div>
          </article>
          <article class="post-article post-layout-standard post-format-quote format-quote">
            <div class="post-content">
              <blockquote>
                <p>After casting her eyes around, as if to look for the aid which was nowhere to be found, and after a few broken interjections, she raised her hands to heaven, and burst into a passion of uncontrolled vexation and sorrow.<br />
                  <a href="#">Paine</a></p>
              </blockquote>
            </div>
          </article>
          <article class="post-article post-layout-standard post-format-audio format-audio has-post-thumbnail">
            <div class="post-featured standard">
              <div class="post-category"><a href="blog.html" title="View all posts in Blog">Blog</a><a href="blog.html" title="View all posts in Sermon">Sermon</a></div>
              <a href="images/audio-image.jpg" class="zoom"><img src="images/audio-image-770x460.jpg" alt="Audio Post" /></a>
              <div class="post_audio">
                <audio controls>
                  <source type="audio/mpeg" src="media/audio.mp3" />
                </audio>
              </div>
            </div>
            <div class="post-header">
              <h2 class="post-title"><a href="audio-post.html">Audio Post</a></h2>
              <div class="post-counters">
                <div class="post-counters-item post-date"> <span class="date">October 19, 2016</span> </div>
                <span class="sep"></span> <a href="audio-post.html" class="post-counters-item post-counters-views icon-eye"><span class="post-counters-number">52</span></a><span class="sep"></span> <a href="audio-post.html#respond" class="post-counters-item icon-comments"><span class="post-counters-number">0</span></a> </div>
            </div>
            <div class="post-content">
              <p>Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices magna vel imperdiet. Donec eu ex&hellip;</p>
              <a class="article-link mt-button animate-out color-1" href="audio-post.html">Read More</a> </div>
          </article>
          <article class="post-article post-layout-standard post-format-link format-link">
            <div class="post-content">
              <p>http://themeforest.net/user/matthiola/portfolio</p>
            </div>
          </article>
          <!-- Pagination -->
          <nav class="navigation pagination" role="navigation">
            <div class="nav-links"> <a class="prev page-numbers" href="#"></a> <span class="page-numbers current"><span class="meta-nav screen-reader-text">Page </span> 1 </span> <a class="page-numbers" href="#"> <span class="meta-nav screen-reader-text">Page </span> 2 </a> <a class="page-numbers" href="#"> <span class="meta-nav screen-reader-text">Page </span> 3 </a> <a class="page-numbers" href="#"> <span class="meta-nav screen-reader-text">Page </span> 4 </a> <a class="next page-numbers" href="#"></a> </div>
          </nav>
          <!-- Pagination -->
        </div>
        <!-- /Content -->
        <!-- Sidebar -->
        <div class="sidebar right widget-area">
          <aside class="widget widget_categories">
            <h5 class="widget-title">Categories</h5>
            <ul>
              <li class="cat-item"> <a href="blog.html" >Blog</a> </li>
              <li class="cat-item"> <a href="blog.html" >Church</a> </li>
              <li class="cat-item"> <a href="blog.html" >Faith</a> </li>
              <li class="cat-item"> <a href="blog.html" >Gallery</a> </li>
              <li class="cat-item"> <a href="blog.html" >Religion</a> </li>
              <li class="cat-item"> <a href="blog.html" >Sermon</a> </li>
            </ul>
          </aside>
          <aside class="widget mt-base-widget mt-base-widget-recent-posts">
            <h5 class="widget-title">Latest news</h5>
            <article class="post-article with-thumb">
              <div class="post-thumb"> <a href="post.html"><img src="images/Paris-370x180.jpg" alt="Kids Deserve a Future" /></a>
                <div class="post-category"><a href="gallery.html" title="View all posts in Gallery">Gallery</a></div>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="post.html">Kids Deserve a Future</a></h6>
                <div class="post-info"> <span class="post-info-item"><a href="post.html" class="post-info-date">November 16, 2016</a></span> </div>
              </div>
            </article>
            <article class="post-article with-thumb">
              <div class="post-thumb"> <a href="post.html"><img src="images/church-370x180.jpg" alt="Let Us Come Together" /></a>
                <div class="post-category"><a href="gallery.html" title="View all posts in Gallery">Gallery</a></div>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="post.html">Let Us Come Together</a></h6>
                <div class="post-info"> <span class="post-info-item"><a href="post.html" class="post-info-date">November 16, 2016</a></span> </div>
              </div>
            </article>
            <article class="post-article with-thumb">
              <div class="post-thumb"> <a href="post.html"><img src="images/gallery-5-370x180.jpg" alt="The World Runs Out of Time" /></a>
                <div class="post-category"><a href="gallery.html" title="View all posts in Gallery">Gallery</a></div>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="post.html">The World Runs Out of Time</a></h6>
                <div class="post-info"> <span class="post-info-item"><a href="post.html" class="post-info-date">November 16, 2016</a></span> </div>
              </div>
            </article>
            <article class="post-article with-thumb">
              <div class="post-thumb"> <a href="post.html"><img src="images/cross-ok-370x180.jpg" alt="American Humane Association" /></a>
                <div class="post-category"> <a href="gallery.html" title="View all posts in Gallery">Gallery</a> </div>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="post.html">American Humane Association</a></h6>
                <div class="post-info"> <span class="post-info-item"> <a href="post.html" class="post-info-date">November 16, 2016</a> </span> </div>
              </div>
            </article>
          </aside>
          <aside class="widget mt-base-widget mt-base-widget-recent-posts">
            <h5 class="widget-title">Sermons</h5>
            <article class="post-article without-thumb">
              <div class="post-content">
                <h6 class="post-title"> <a href="post.html">Understanding the Bible</a> </h6>
                <div class="post-info"> <span class="post-info-item"> <a href="post.html" class="post-info-date">October 19, 2016</a> </span> </div>
              </div>
            </article>
            <article class="post-article without-thumb">
              <div class="post-content">
                <h6 class="post-title"> <a href="post.html">Teach Children to Love God</a></h6>
                <div class="post-info"> <span class="post-info-item"> <a href="post.html" class="post-info-date">October 17, 2016</a> </span> </div>
              </div>
            </article>
            <article class="post-article without-thumb">
              <div class="post-content">
                <h6 class="post-title"><a href="post.html">Simple Steps for Creating an Inspirational Newsletter</a></h6>
                <div class="post-info"> <span class="post-info-item"> <a href="post.html" class="post-info-date">October 24, 2016</a> </span> </div>
              </div>
            </article>
            <article class="post-article without-thumb">
              <div class="post-content">
                <h6 class="post-title"><a href="post.html">Read the Bible every day</a></h6>
                <div class="post-info"> <span class="post-info-item"><a href="post.html" class="post-info-date">October 25, 2016</a></span> </div>
              </div>
            </article>
          </aside>
          <aside class="widget widget_tag_cloud">
            <h5 class="widget-title">Tags</h5>
            <div class="tagcloud"> <a href='blog.html' class='tag-link' title='1 topic'>audio</a> <a href='blog.html' class='tag-link' title='7 topics'>Child</a> <a href='blog.html' class='tag-link' title='7 topics'>church</a> <a href='blog.html' class='tag-link' title='5 topics'>God</a> <a href='blog.html' class='tag-link' title='5 topics'>Latest News</a> <a href='blog.html' class='tag-link' title='6 topics'>Ministry</a> <a href='blog.html' class='tag-link' title='6 topics'>News</a> <a href='blog.html' class='tag-link' title='5 topics'>seminar</a> <a href='blog.html' class='tag-link' title='3 topics'>Volunteer</a> </div>
          </aside>
        </div>
        <!-- /Sidebar -->
      </div>
    </div>
    <!-- Page Content Wrap -->
    <!-- Widgets Below Page -->
    <?php
	display_footer();
	?>
    <!-- /Copyright -->
  </div>
  <!-- /Site Content -->
</div>
<!-- /Wrapper -->
<!-- Up -->
<a href="#" class="to-top icon-up-open-mini" title="Up"></a>
<!-- /Up -->
<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-packed.js'></script>
<script type="text/javascript" src="js/additionally/mediaelement/mediaelement-and-player.min.js"></script>
<script type='text/javascript' src='js/join.min.js'></script>
<script type='text/javascript' src='js/master.min.js'></script>
<script type='text/javascript' src='js/superfish.min.js'></script>
<script type='text/javascript' src='js/additionally/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='js/additionally/googlemap/googlemap.min.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyC6OEzNMpzE5zBQTczGohz0EP1UImqjp3E&amp;callback=MtInitMap'></script>
</body>
<!-- Mirrored from holy-word-html.artmatthiola.com/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 08:18:41 GMT -->
</html>