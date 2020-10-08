<head>
  <title><?php the_title();?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" id="text-page" style="padding: 0; margin: 0">
  <?php get_template_part('includes/section', 'header');?>

  <section class="about-section">
    <?php get_template_part('includes/section', 'content');?>
  </section>
</main>

<?php get_footer()?>
