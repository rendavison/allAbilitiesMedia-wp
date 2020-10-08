<head>
  <title><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" style="padding: 0; margin: 0">
  <?php get_template_part('includes/section', 'header-archive');?>

  <section class="archive" style="margin-top: 1rem; margin-bottom: 3rem;">
    <section class="row">

      <?php the_archive_description( '<h3 class="desc">', '</h3>' ); ?>

      <section>
        <?php get_template_part('includes/section', 'archive');?>
      </section>
    </section>
  </section>
</main>

<?php get_footer()?>
