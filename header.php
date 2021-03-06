<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<!--

   ____ ___  ____ _  _    ____ ____ _  _ ____ ____ ____
   |  | |__] |___ |\ |    [__  |  | |  | |__/ |    |___
   |__| |    |___ | \|    ___] |__| |__| |  \ |___ |___

   d8888b.  d8888b.  d888888b  d8888b.   d888b   d88888b
   88  `8D  88  `8D    `88'    88  `8D  88' Y8b  88'
   88oooY'  88oobY'     88     88   88  88       88ooooo
   88~~~b.  88`8b       88     88   88  88  ooo  88~~~~~
   88   8D  88 `88.    .88.    88  .8D  88. ~8~  88.
   Y8888P'  88   YD  Y888888P  Y8888D'   Y888P   Y88888P

   =====================================================
   We <3 people who view our site's source code.
   Use the code 'osbhtml' to get 10% off on registration.
   =====================================================

-->
<head profile="http://gmpg.org/xfn/11">
   <title><?php wp_title( '/', true, 'right' ); ?>Open Source Bridge: The conference for open source citizens / June 1-4, 2010 / Portland, OR</title>
   <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
   <link rel="stylesheet" type="text/css" href="http://opensourcebridge.org/common/osbp_common_v3.css" />
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
   <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
   <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
   <link rel="alternate" type="application/atom+xml" href="/proposals.atom" title="Open Source Bridge Proposal Submissions" />
   <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?php bloginfo('template_directory'); ?>/js/jquery.countdown.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

   <div id="header">
      <div class='inner_container'>
         <h1 id="site-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
         <div id="site-description">
            <h2>The conference for open source citizens</h2>
            <p id='conference-date-location'>June 1&ndash;4, 2010 <span class='separator'>|</span> Portland, Oregon</p>
         </div>
      </div>
   </div><!--  #header -->

   <?php

   global $wp_query;

   if( empty($wp_query->post->post_parent) ) {
      $parent = $wp_query->post->ID;
   } else {
      $parent = $wp_query->post->post_parent;
   }

   ?>


   <div id="access">
      <div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>

      <div id="menu">
         <ul>
            <li id="menu_first_item" <?php print ($parent==10 ? 'class="current_page_item"' : ''); ?>><a href='/about/' title='About' class=''>About</a></li>
            <li <?php print ($parent==211 ? 'class="current_page_item"' : ''); ?>><a href='/attend/' title='Attend' class=''>Attend</a></li>
            <li class="page_item"><a href='/sessions/' title='Sessions' class=''>Sessions</a></li>
            <li <?php print ($parent==56 ? 'class="current_page_item"' : ''); ?>><a href="/volunteer/" title="Volunteer">Get Involved</a></li>
            <li <?php print ($parent==173 ? 'class="current_page_item"' : ''); ?>><a href="/sponsors/" title="Sponsors">Sponsors</a></li>
            <li <?php print (!is_page() ? 'class="current_page_item"' : ''); ?>><a href="/blog">Blog</a></li>
            <li class="page_item"><a href='/wiki/' title='Wiki' class=''>Wiki</a></li>
         </ul>
      </div>

      <?php
      if (!is_front_page()) {

      if(is_page()) {
         $section_title = get_the_title($parent);
      } else {
         $section_title = "Blog";
      }
      ?>

      <div id="subnav" class='navbar'>
         <div class='inner_container'>
         <h2><?php echo $section_title ?></h2>

      <?php if($parent && wp_list_pages("title_li=&child_of=$parent&echo=0" )): ?>
         <ul>
            <li class="page_item<?php echo ($wp_query->post->ID == $parent) ? ' current_page_item' : '' ?>">
               <a href="<?php echo get_permalink($parent) ?>" title="<?php echo $section_title ?>">Overview</a>
            </li>
            <?php wp_list_pages("title_li=&child_of=$parent" ); ?>
         </ul>
      <?php endif; ?>
         </div>
      </div>
      <?php } ?>
   </div><!-- #access -->
