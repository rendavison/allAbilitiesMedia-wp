<?php
/*
Template Name: Video Gallery
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
  <?php get_template_part('includes/section', 'header');?>
  
  <section style="margin-top: 3rem;">
    <?php get_template_part('includes/section', 'content');?>
  </section>
</main>

<?php get_footer()?>
