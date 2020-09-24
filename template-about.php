<?php
/*
Template Name: Media Gallery
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" id="about-page">
    <h1><?php the_title();?></h1>

    <section class="about-section">
      <?php get_template_part('includes/section', 'content');?>
    </section>
</main>

<?php get_footer()?>
