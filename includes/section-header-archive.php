<section class="header">
  <?php
    $term = get_queried_object();
    $image = get_field('header', $term);
    if( !empty( $image ) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <h1><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
</section>
