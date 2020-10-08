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
    <?php get_template_part('includes/section', 'header');?>

    <center>
      <h3 class="desc">
        <?php get_template_part('includes/section', 'content');?>
      </h3>
    </center>

    <section class="show">
      <section class="show-info">
        <h3>A Valid Podcast</h3>
        <img class="album-art" src="http://localhost:8080/allAbilities/wp-content/uploads/2020/09/04417a0246ccbf88.png" />
        <p>
          People with disabilities share humor, analysis, news, and information about their lives and the disability community at large. We welcome guests to live recordings at 7 pm (EDT) Tuesdays & Thursdays. To join the conversation, go to unabridgedpress.com. Produced by Unabridged Press in partnership with Point Park University Center for Media Innovation.
        </p>
        <b>Latest Episode:</b><br />
        <iframe src="https://anchor.fm/a-valid-podcast/embed" height="102px" width="100%" frameborder="0" scrolling="no"></iframe>
        <br /><br />
        <center>
          <button type="button" class="btn btn-outline-light btn-lg">
            <a href="/allAbilities/category/a-valid-podcast/">Listen to more</a>
          </button>
          <button type="button" class="btn btn-outline-light btn-lg">
            <a href="/allAbilities/tag/avp-asl/">ASL versions</a>
          </button>
        </center>
      </section>
    </section>

    <section class="show-alt">
      <section class="show-info">
        <h3>Look Who's Here!</h3>
        <img class="album-art" src="http://localhost:8080/allAbilities/wp-content/uploads/2020/09/artworks-000361646286-uwygqu-t500x500.jpg" />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacus massa, egestas vitae fermentum ac, congue ac metus. Sed feugiat sem nec nisl hendrerit vulputate. Vestibulum blandit efficitur felis euismod consectetur. Aenean faucibus tellus at venenatis venenatis.
        </p>
        <b>Latest Episode:</b><br />
        <iframe width="100%" height="102px" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/673828433&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <br /><br />
        <center>
          <button type="button" class="btn btn-outline-light btn-lg">
            <a href="/allAbilities/category/look-whos-here/">Listen to more</a>
          </button>
        </center>
      </section>
    </section>
  </section>
</main>

<?php get_footer()?>
