<section class="row">
  <?php if ( have_posts() ): while( have_posts() ): the_post();?>
    <section class="card">
      <section class="card-body">

        <!--Podcast Info-->
        <h3 class="card-title"><?php the_title();?></h3>
        <section class="show-info">
          <?php the_content();?>
        </section>

        <!--Featured Episode-->
        <b>Featured episode:</b>
        <section style="margin-top: 0.5rem;">
          <?php the_field('featured_embed'); ?>
        </section>

        <!--Buttons-->
        <center style="margin-top: 0.5rem;">
          <?php
            $link = get_field('link_to_eps');
            if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
            ?>
              <button type="button" class="btn btn-outline-light btn-lg">
                <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
              </button>
          <?php endif; ?>

          <?php
            $link = get_field('deaf_friendly');
            if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
            ?>
              <button type="button" class="btn btn-outline-light btn-lg">
                <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
              </button>
          <?php endif; ?>
        </center>
      </section>
    </section>
  <?php endwhile; else: endif;?>
</section>
