<?php get_header()?>

<main class="container-fluid" style="padding: 0">

  <!--Stand in for intro video-->
  <section>
    <div style="width: 100%; background: black; height: 600px">
    </div>
  </section>

  <section class="index-accent">
    <div class="headline">
      <?php the_field('intro_text'); ?>
    </div>
    <?php
      $image = get_field('intro_photo');
      if( !empty( $image ) ): ?>
        <img class="right" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </section>

  <section class="index-section">
    <div class="headline-alt">See Our Work</div>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'see-our-work'
        )
      );
      ?>
  </section>

  <section class="index-primary">
    <?php
      $image = get_field('quote_photo');
      if( !empty( $image ) ): ?>
        <img class="offset" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="headline-right">
      <?php the_field('quote'); ?><br />
      <?php
        $link = get_field('quote_link');
        if( $link ): ?>
          <a class="read-more" href="<?php echo esc_url( $link ); ?>">Read more →</a>
      <?php endif; ?>
    </div>
  </section>

  <section class="index-section">
    <?php
      $image = get_field('about_photo');
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <section class="inset-info">
      <p>
        <?php the_field('about'); ?><br />
        <?php
          $link = get_field('about_link');
          if( $link ): ?>
            <a href="<?php echo esc_url( $link ); ?>">More about us →</a>
        <?php endif; ?>
      </p>
    </section>
  </section>

  <section class="index-secondary">
    <div class="headline-alt" style="color: white;">Our Partners</div>
    <center>
      <button type="button" class="btn btn-outline-light btn-lg">get involved</button>
    </center>
  </section>

</main>

<?php get_footer()?>
