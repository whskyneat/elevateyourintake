<?php
/*
Plugin Name: Discrete Google Analytics Plugin
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Aloha_Ryan
Version: 1.0
 */

function elevated_google_analytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89050113-1', 'auto');
  ga('send', 'pageview');

</script>
<?php }

add_action( 'wp_head', 'elevated_google_analytics', 10 );

