<?php
/*
Template Name: About Us
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" id="text-page">
  <section class="row">
    <?php get_template_part('includes/section', 'header');?>

    <a name="main-content" tabindex="-1"></a>

    <section class="about-section">
      <?php get_template_part('includes/section', 'content');?>
    </section>

    <div id="about-sidebar">
      <?php if(is_active_sidebar('about-sidebar')):?>
        <?php dynamic_sidebar('about-sidebar');?>
      <?php endif;?>
    </div>
  </section>
</main>

<?php get_footer()?>
