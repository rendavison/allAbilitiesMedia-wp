<section class="row" id="video-feed">
  <?php if ( have_posts() ): while( have_posts() ): the_post();?>
    <section class="card">
      <section class="card-body">
        <?php the_content();?>
        <h3 class="card-title"><?php the_title();?></h3>
      </section>
    </section>
  <?php endwhile; else: endif;?>
</section>
