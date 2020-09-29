<?php get_header()?>

<main class="container-fluid" style="padding: 0">

  <!--Stand in for intro video-->
  <section>
    <div style="width: 100%; background: black; height: 600px">
    </div>
  </section>

  <!-- Intro Text -->
  <section class="index-section">
    <div class="headline-alt">
      <span class="highlight">
        <?php the_field('intro_text'); ?>
      </span>
    </div>
  </section>

  <!-- See Our Work -->
  <section class="index-section">

    <section class="index-secondary half-section">
      <div class="headline">See Our Work</div>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'see-our-work'
          )
        );
        ?>
    </section>

    <?php
      $image = get_field('intro_photo');
      if( !empty( $image ) ): ?>
        <img class="left" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </section>

  <!-- Quote from a student -->
  <section class="index-section">
    <!--<?php
      $image = get_field('quote_photo');
      if( !empty( $image ) ): ?>
        <img class="offset" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>-->

    <h2 class="headline-primary">
        <?php the_field('quote'); ?>
      <br />
        <center>
          <?php
            $link = get_field('quote_link');
            if( $link ): ?>
              <h4 style="padding-top: 0.5rem;">
                <a href="<?php echo esc_url( $link ); ?>">Read more →</a>
              </h4>
          <?php endif; ?>
        </center>
    </h2>
  </section>

  <!-- About -->
  <section class="index-section">
    <?php
      $image = get_field('about_photo');
      if( !empty( $image ) ): ?>
        <img class="left" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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

  <!-- Partners -->
  <section class="index-secondary">
    <div class="headline" style="color: white;">Our Partners</div>
    <section id="partners">
      <center>
        <?php $partners = get_field('partners_logos'); ?>
          <?php foreach ($partners as $logo) {
            if (!empty($logo)): ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
            <?php endif; } ?>

            <section class="index-section" style="justify-content: center;">
              <button type="button" class="btn btn-outline-light btn-lg">get involved</button>
            </section>
      </center>
    </section>
  </section>

</main>

<?php get_footer()?>
