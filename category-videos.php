<?php
/*
Template Name: Video Gallery
*/
?>

<head>
  <title><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
  <?php get_template_part('includes/section', 'video');?>
</main>

<?php get_footer()?>
