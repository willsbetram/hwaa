<?php
require_once ("interface.php");
display_head ("Contact - HWA");
?>
<body class="sidebar-show sidebar-right menu-standard is-header-standard body-wide">
<!-- Wrapper -->
<div id="wrapper">
  <!-- Site Content -->
  <div class="site-content">
    <!-- Header -->
    <?php
	display_header("contact");
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
                            <h6>Maecenas sodales rutrum felis, in auctor enim rhoncus in. Curabitur tristique, turpis pulvinar feugiat imperdiet, elit arcu hendrerit arcu, et gravida orci lorem posuere turpis.</h6>
                            <p>Albert Holz GmbH<br />
                            Neue Strasse 21<br />
                            71576 Burgstetten<br />
                            Germany</p>
                            <!-- Form wpcf7 -->
                            <div class="wpcf7">
                                <form action="http://holy-word-html.artmatthiola.com/inc/mail.php" method="post" class="wpcf7-form">
                                    <div class="columns-wrap">
                                        <div class="column-1_2">
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="name" placeholder="Name *" size="40" aria-required="true"/>
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" name="email" placeholder="E-mail *" size="40" aria-required="true"/>
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-subject">
                                                <input type="text" name="subject" placeholder="Subject" size="40"/>
                                            </span>
                                            <span class="info">* indicates required information</span>
                                        </div>
                                        <div class="column-1_2">
                                            <span class="wpcf7-form-control-wrap your-message">
                                                <textarea name="message" cols="40" rows="10" aria-required="true">Message *</textarea>
                                            </span>
                                            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                        </div>
                                    </div>
                                    <div class="result mt-info-box"></div>
                                </form>
                            </div>
                            <!-- /Form wpcf7 -->
                        </div>
            <!-- /Post Content -->
          </article>
        </div>
        <!-- /Content -->
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