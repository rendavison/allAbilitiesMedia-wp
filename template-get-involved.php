<?php
/*
Template Name: Get Involved
*/
?>

<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" id="text-page">
  <section class="row">
    <section class="header">
      <?php
        $image = get_field('header');
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
      <h1><?php the_title();?></h1>
    </section>

    <section class="about-section">
      <?php get_template_part('includes/section', 'content');?>
    </section>

    <div id="get-involved-sidebar">
      <?php if(is_active_sidebar('get-involved-sidebar')):?>
        <?php dynamic_sidebar('get-involved-sidebar');?>
      <?php endif;?>
    </div>
  </section>
</main>

<?php get_footer()?>