<?php get_header()?>

<main class="container-fluid" style="padding: 0">

  <!--Stand in for intro video-->
  <section>
    <!--<div style="width: 100%; background: black; height: 600px">-->
    <div style="padding:55.83% 0 0 0;position:relative;"><iframe src="https://drive.google.com/file/d/1qG8bM2UEwNWkpgGgqfiCm2_ptx6B07Wo/preview" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="fullscreen" allowfullscreen></iframe></div>
    <!--<iframe src="https://drive.google.com/file/d/1qG8bM2UEwNWkpgGgqfiCm2_ptx6B07Wo/preview" width="100%" height="100%"></iframe>-->
    </div>
  </section>

  <!-- Intro Text -->
  <section class="index-section" id="#main-content" tabindex="-1">
    <div class="headline-alt">
      <span class="highlight">
        <?php the_field('intro_text'); ?>
      </span>
    </div>
  </section>

  <!-- See Our Work -->
  <section class="index-section" style="padding:0">

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
        <img class="left half" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
                <a href="<?php echo esc_url( $link ); ?>" aria-label="Read more">Read more →</a>
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
        <img class="left two-thirds" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <section class="inset-info">
      <p>
        <?php the_field('about'); ?><br />
        <?php
          $link = get_field('about_link');
          if( $link ): ?>
            <a href="<?php echo esc_url( $link ); ?>" aria-label="More about us">More about us →</a>
        <?php endif; ?>
      </p>
    </section>
  </section>

  <!-- Funders -->
  <section class="index-section" style="margin-bottom: 3rem;">
    <div class="headline-primary">Funding Partners</div>
    <section class="partners">
      <center>
        <?php $funders = get_field('funding_partners'); ?>
          <?php foreach ($funders as $logo) {
            if (!empty($logo)): ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
            <?php endif; } ?>
      </center>
    </section>
  </section>

  <!-- Partners -->
  <section class="index-primary" style="justify-content: center">
    <div class="headline">News Partners</div>
    <section class="partners">
      <center>
        <?php get_template_part('includes/section', 'content');?>
      </center>

      <section class="index-section" style="justify-content: center;">
        <button type="button" class="primary btn btn-outline-light btn-lg">
          <a href="/get-involved" aria-label="get involved">get involved</a>
        </button>
      </section>
    </section>
  </section>

</main>

<?php get_footer()?>
