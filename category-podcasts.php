<head>
  <title><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> - All-Abilities Media</title>
</head>

<?php get_header()?>

<main class="container-fluid" style="padding: 0; margin: 0">
  <?php get_template_part('includes/section', 'header-archive');?>

  <section class="archive" id="podcast-feed" style="margin-top: 1rem; margin-bottom: 3rem;">
    <a name="main-content" tabindex="-1"></a>
    <section class="row">

      <?php the_archive_description( '<h2 class="desc">', '</h2>' ); ?>

      <section class="shows">
        <?php get_template_part('includes/section', 'podcasts');?>
      </section>
    </section>
  </section>
</main>

<?php get_footer()?>
