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
  <section class="header">
    <?php
      $image = get_field('header');
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <h1><?php the_title();?></h1>
  </section>

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
