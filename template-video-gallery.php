<?php
/*
Template Name: Video Gallery
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="pj9DPSoP"></script>

<main class="container-fluid" style="padding: 0; margin: 0">
  <?php get_template_part('includes/section', 'header');?>

  <section id="video-gallery">
    <?php get_template_part('includes/section', 'content');?>
  </section>
</main>

<?php get_footer()?>
