<?php
/*
Template Name: Media Gallery
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid">
    <h1><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'content');?>
</main>

<?php get_footer()?>