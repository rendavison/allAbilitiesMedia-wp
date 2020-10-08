<?php
/*
Template Name: Podcast Overview
*/
?>

<head>
  <title><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" style="padding: 0; margin: 0">
  <section class="header">
    <?php
      $term = get_queried_object();
      $image = get_field('header', $term);
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <h1><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
  </section>

  <section id="podcast-feed" style="margin-top: 1rem; margin-bottom: 3rem;">
    <section class="row">

      <?php the_archive_description( '<h3 class="desc">', '</h3>' ); ?>

      <section class="shows">
        <?php get_template_part('includes/section', 'podcasts');?>
      </section>
    </section>
  </section>
</main>

<?php get_footer()?>
