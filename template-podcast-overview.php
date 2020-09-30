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
  <section class="row">
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

    <section class="show">
      <img class="album-art" style="border: 1px solid #ccc" src="http://localhost:8080/allAbilities/wp-content/uploads/2020/09/artworks-000361646286-uwygqu-t500x500.jpg" />
      <section class="show-info">
        <h3>Look Who's Here!</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacus massa, egestas vitae fermentum ac, congue ac metus. Sed feugiat sem nec nisl hendrerit vulputate. Vestibulum blandit efficitur felis euismod consectetur. Aenean faucibus tellus at venenatis venenatis. Suspendisse et magna eget nulla cursus placerat. Mauris non lacus mi. Sed tincidunt sed lacus id elementum. Integer blandit, nunc a dictum tempus, augue elit gravida nisi, id cursus tortor ligula quis metus.
        </p>
      </section>
    </section>

    <section class="show">
      <img class="album-art" src="http://localhost:8080/allAbilities/wp-content/uploads/2020/09/04417a0246ccbf88.png" />
      <section class="show-info">
        <h3>A Valid Podcast</h3>
      </section>
    </section>
  </section>
</main>

<?php get_footer()?>
