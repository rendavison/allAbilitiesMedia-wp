<section class="row">
  <?php if ( have_posts() ): while( have_posts() ): the_post();?>
    <section class="card">
      <section class="card-body">
        <h3 class="card-title"><?php the_title();?></h3>
        <?php the_content();?>
      </section>
    </section>
  <?php endwhile; else: endif;?>
</section>
