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
  <section class="header">
    <?php
      $image = get_field('header');
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <h1><?php the_title();?></h1>
  </section>
  <section style="margin-top: 3rem;">
    <?php get_template_part('includes/section', 'content');?>
  </section>
</main>

<?php get_footer()?>
