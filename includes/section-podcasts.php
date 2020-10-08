<section class="row">
  <?php if ( have_posts() ): while( have_posts() ): the_post();?>
    <section class="card">
      <section class="card-body">

        <h3 class="card-title"><?php the_title();?></h3>
        <section class="show-info">
          <?php the_content();?>
        </section>

        <b>Featured episode:</b>
        <section style="margin-top: 0.5rem;">
          <?php the_field('featured_embed'); ?>
        </section>

        <center>
          <button type="button" class="btn btn-outline-light btn-lg">
            <a href="/allAbilities/category/<?php the_title();?>">Listen to more</a>
          </button>
        </center>
      </section>
    </section>
  <?php endwhile; else: endif;?>
</section>
