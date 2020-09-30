<?php
/*
Template Name: Podcast Overview
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" id="podcast-overview">
    <h1><?php the_title();?></h1>

    <section class="desc">
      <?php get_template_part('includes/section', 'content');?>
    </section>

    <section class="show-row">
      <section class="show">
        test
      </section>
      <section class="show">
        test
      </section>
    </section>
</main>

<?php get_footer()?>
