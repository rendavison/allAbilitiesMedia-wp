<?php get_header()?>

<main class="container-fluid" style="padding: 0">

  <!--Stand in for intro video-->
  <section>
    <div style="width: 100%; background: black; height: 800px">
    </div>
  </section>

  <section class="index-accent">
    <div class="headline">
      <?php the_field('intro_text'); ?>
    </div>
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
    <center class="button-group">
      <button type="button" class="btn btn-outline-light btn-lg">get involved</button>
    </center>
  </section>

</main>

<?php get_footer()?>
