<?php
require_once ("interface.php");
display_head ("Gallery - HWA");
?>
<body class="sidebar-show sidebar-right menu-standard is-header-standard body-wide">
<!-- Wrapper -->
<div id="wrapper">
  <!-- Site Content -->
  <div class="site-content">
    <!-- Header -->
    <?php
	display_header("gallery");
	?>
    <!-- /Header -->
    <!-- Header Breadcrumbs -->
    <div id="header-breadcrumbs">
      <div class="content-container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs"> <a class="breadcrumbs-item home" href="index.html">Home</a><span class="sep"></span><span class="breadcrumbs-el current">Sermons</span> </div>
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
          <article class="post-article-single page">
            <!-- Post Content -->
            <div class="post-content">
              <h1>H1 Heading</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies ac nisl et pulvinar. Morbi vitae accumsan ipsum, eget convallis metus. Nulla facilisi. Morbi vel felis mi. Cras vehicula, nunc eget finibus ullamcorper, massa sem varius leo, nec tempus elit diam at diam. Curabitur et placerat tortor. Phasellus egestas fringilla arcu vitae rhoncus. Fusce mattis leo quam, vel semper lacus tempor vitae. Aenean non justo non ipsum rutrum cursus nec id nunc. Nulla tincidunt odio elit, vitae porta ex placerat id. Aenean interdum convallis neque. Nunc arcu ligula, elementum non ullamcorper sed, volutpat eget diam.</p>
              <h2>H2 Heading</h2>
              <p>Ut fringilla malesuada erat, at posuere ex convallis vitae. Phasellus eu felis magna. Suspendisse sit amet sapien et ligula iaculis placerat. Nam mollis viverra accumsan. Proin congue orci vel pellentesque posuere. Nulla sit amet mi venenatis, sollicitudin enim ac, ornare lorem. Aenean vestibulum metus urna, at bibendum lectus mattis vel. Mauris semper metus mi, non fringilla velit placerat vel. Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at. Vestibulum dapibus arcu lobortis, mattis est sed, accumsan tortor. Integer porttitor libero rhoncus odio mollis.</p>
              <h3>H3 Heading</h3>
              <p>Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices magna vel imperdiet. Donec eu ex justo. Donec ut neque quam. Mauris in quam posuere tellus tincidunt consequat sit amet et eros. Ut pellentesque ex eget sapien ultricies, in efficitur mi sollicitudin. Donec massa elit, tempus quis venenatis sit amet, tincidunt id nulla. Sed ac ex id nisi placerat vulputate. Mauris molestie ipsum non consequat cursus. Sed nulla metus, pellentesque sed scelerisque sit amet, pretium id neque. In in nisi pretium, tristique diam a, ullamcorper sapien. </p>
              <h4>H4 Heading</h4>
              <p>Aliquam venenatis semper risus et suscipit. Suspendisse suscipit, tellus non semper auctor, augue nulla ornare lorem, a vestibulum orci turpis et nibh. Nunc viverra, libero at bibendum eleifend, isus hendrerit elit, non porta quam nisl non eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales, risus nec sagittis tempus, enim quam bibendum quam, a varius metus turpis. Praesent bero eu mi dignissim ullamcorper quis non tortor. Ut at elementum felis, sed maximus lorem. Donec sem libero, efficitur ut leo sit amet, malesuada mattis dui. Etiam sodales erat, sed ultrices ipsum.</p>
              <h5>H5 Heading</h5>
              <p>Ut fringilla malesuada erat, at posuere ex convallis vitae. Phasellus eu felis magna. Suspendisse sit amet sapien et ligula iaculis placerat. Nam mollis viverra accumsan. Proin congue orci vel pellentesque posuere. Nulla sit amet mi venenatis, sollicitudin enim ac, ornare lorem. Aenean vestibulum metus urna, at bibendum lectus mattis vel. Mauris semper metus mi, non fringilla velit placerat vel. Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at. Vestibulum dapibus arcu lobortis, mattis est sed, accumsan tortor. Integer porttitor libero rhoncus odio mollis.</p>
              <h6>H6 Heading</h6>
              <p>Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices magna vel imperdiet. Donec eu ex justo. Donec ut neque quam. Mauris in quam posuere tellus tincidunt consequat sit amet et eros. Ut pellentesque ex eget sapien ultricies, in efficitur mi sollicitudin. Donec massa elit, tempus quis venenatis sit amet, tincidunt id nulla. Sed ac ex id nisi placerat vulputate. Mauris molestie ipsum non consequat cursus. Sed nulla metus, pellentesque sed scelerisque sit amet, pretium id neque. In in nisi pretium, tristique diam a, ullamcorper sapien.</p>
              <hr />
              <h3>Image alignment</h3>
              <p>Ut fringilla malesuada erat, at posuere ex convallis vitae. Phasellus eu felis magna. Suspendisse sit amet sapien et ligula iaculis placerat. Nam mollis viverra accumsan. Proin congue orci vel pellentesque posuere. Nulla sit amet mi venenatis, sollicitudin enim ac, ornare lorem. Aenean vestibulum metus urna, at bibendum lectus mattis vel. Mauris semper metus mi, non fringilla velit placerat vel.</p>
              <figure class="theme-caption alignnone"><a href="images/typography.jpg"><img src="images/typography.jpg" alt="Alt Text" width="1170" height="489" class="aligncenter" /></a>
                <figcaption class="theme-caption-text">Image Caption</figcaption>
              </figure>
              <p>Etiam consequat vitae felis a efficitur. Praesent a purus maximus, cursus sem eu, sagittis libero. Suspendisse ut sapien porta, imperdiet nunc sit amet, consectetur urna. Sed quis dolor viverra, vehicula purus sed, blandit ante. Maecenas pulvinar tellus sem, at sollicitudin mi iaculis ut. Nunc molestie est et semper eleifend. Phasellus elementum, nunc id molestie porta, mi erat molestie quam, ac ultricies eros lacus ac ante.</p>
              <p><a href="images/pic5.jpg"><img src="images/pic5.jpg" alt="Attachment Caption" width="298" height="440" class="alignleft" /></a>Ut fringilla malesuada erat, at posuere ex convallis vitae. Phasellus eu felis magna. Suspendisse sit amet sapien et ligula iaculis placerat. Nam mollis viverra accumsan. Proin congue orci vel pellentesque posuere. Nulla sit amet mi venenatis, sollicitudin enim ac, ornare lorem. Aenean vestibulum metus urna, at bibendum lectus mattis vel. Mauris semper metus mi, non fringilla velit placerat vel. Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at.</p>
              <p>Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at. Vestibulum dapibus arcu lobortis, mattis est sed, accumsan tortor. Integer porttitor libero rhoncus odio mollis, eu cursus metus aliquam. Aliquam sodales tellus in faucibus viverra.</p>
              <p><a href="images/typography-1.jpg"><img src="images/typography-1.jpg" alt="typography" width="300" height="420" class="alignright" /></a></p>
              <p>Maecenas tincidunt nisi erat, eu dignissim tellus malesuada at. Vestibulum dapibus arcu lobortis, mattis est sed, accumsan tortor. Integer porttitor libero rhoncus odio mollis, eu cursus metus aliquam. Aliquam sodales tellus in faucibus viverra.</p>
              <p>Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices magna vel imperdiet. Donec eu ex justo. Donec ut neque quam. Mauris in quam posuere tellus tincidunt consequat sit amet et eros. Ut pellentesque ex eget sapien ultricies, in efficitur mi sollicitudin. Donec massa elit, tempus quis venenatis sit amet, tincidunt id nulla. Sed ac ex id nisi placerat vulputate. Mauris molestie ipsum non consequat cursus. </p>
              <p>Sed nulla metus, pellentesque sed scelerisque sit amet, pretium id neque. In in nisi pretium, tristique diam a, ullamcorper sapien. Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices magna vel imperdiet. Donec eu ex justo. Donec ut neque quam. Mauris in quam posuere tellus tincidunt consequat sit amet et eros. Ut pellentesque ex eget sapien ultricies, in efficitur mi sollicitudin. Donec massa elit, tempus quis venenatis sit amet, tincidunt id nulla. Sed ac ex id nisi placerat vulputate. Mauris molestie ipsum non consequat cursus. Sed nulla metus, pellentesque sed scelerisque sit amet, pretium id neque. In in nisi pretium, tristique diam a, ullamcorper sapien.</p>
              <hr />
              <h3>Inline Elements</h3>
              <p><strong>Sed nulla metus</strong>, pellentesque sed <em>scelerisque sit amet</em>, pretium id neque. In in nisi pretium, <a href="#">tristique diam a</a>, ullamcorper sapien. Vivamus varius in metus eget sagittis. Morbi a purus semper, molestie arcu ut, ullamcorper urna. Nullam molestie ultrices <del>magna vel imperdiet</del>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Donec eu ex justo. Donec ut neque quam.</p>
              <hr />
              <h3>Blockquotes</h3>
              <p>Ut fringilla malesuada erat, at posuere ex convallis vitae. Phasellus eu felis magna. Suspendisse sit amet sapien et ligula iaculis placerat. Nam mollis viverra accumsan. Proin congue orci vel pellentesque posuere. Nulla sit amet mi venenatis, sollicitudin enim ac, ornare lorem.</p>
              <blockquote>
                <p>The world is my country, all mankind are my brethren, and to do good is my religion.<br />
                  <a href="#">Paine</a></p>
              </blockquote>
              <p>Ut pellentesque ex eget sapien ultricies, in efficitur mi sollicitudin. Donec massa elit, tempus quis venenatis sit amet, tincidunt id nulla. Sed ac ex id nisi placerat vulputate. Mauris molestie ipsum non consequat cursus.</p>
              <hr />
              <h3>Lists</h3>
              <p>Etiam consequat vitae felis a efficitur. Praesent a purus maximus, cursus sem eu, sagittis libero. Suspendisse ut sapien porta, imperdiet nunc sit amet.</p>
              <ul>
                <li>Etiam consequat vitae felis a efficitur.</li>
                <li>Suspendisse ut sapien porta, imperdiet nunc sit amet, consectetur urna. Sed quis dolor viverra, vehicula purus sed, blandit ante. Maecenas pulvinar tellus sem, blandit ante.
                  <ul>
                    <li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>Maecenas pulvinar tellus sem, at sollicitudin mi iaculis ut.</li>
                  </ul>
                </li>
              </ul>
              <h3>Ordered List</h3>
              <p>Phasellus elementum, nunc id molestie porta, mi erat molestie quam, ac ultricies eros lacus ac ante. Curabitur nisi tortor, ornare et commodo eget.</p>
              <ol>
                <li>Imperdiet nunc sit amet, consectetur urna.</li>
                <li>Sed quis dolor viverra, vehicula purus sed, blandit ante. Maecenas pulvinar tellus sem, blandit ante. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia id est laborum.</li>
                <li>Sunt in culpa qui</li>
              </ol>
            </div>
            <!-- /Post Content -->
          </article>
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
<script type='text/javascript' src='js/join.min.js'></script>
<script type='text/javascript' src='js/master.min.js'></script>
<script type='text/javascript' src='js/superfish.min.js'></script>
<script type='text/javascript' src='js/additionally/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='js/additionally/googlemap/googlemap.min.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyC6OEzNMpzE5zBQTczGohz0EP1UImqjp3E&amp;callback=MtInitMap'></script>
</body>
<!-- Mirrored from holy-word-html.artmatthiola.com/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 08:17:10 GMT -->
</html>