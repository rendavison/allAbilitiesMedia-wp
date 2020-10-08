<section class="header">
  <?php
    $image = get_field('header');
    if( !empty( $image ) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <h1><?php the_title();?></h1>
</section>
