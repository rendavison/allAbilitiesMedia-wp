<?php
/*
Template Name: Media Gallery
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container" id="template-gallery">
  <section class="header">
    <?php
      $image = get_field('header');
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <h1 style="padding: 3rem 0;"><?php the_title();?></h1>
  </section>

    <?php get_template_part('includes/section', 'content');?>
</main>

<?php get_footer()?>
