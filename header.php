<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Abilities Media</title>

    <?php wp_head();?>
    <!-- Import Adobe Font -->
    <link rel="stylesheet" href="https://use.typekit.net/kma0tcc.css">
  </head>
  <body>
    <nav>
      <section class="primary">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-buttons'
          )
        );
        ?>
      </section>
      <section class="secondary">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'secondary-nav'
          )
        );
        ?>
      </section>
    </nav>
<!--
    <nav>
      <section class="primary">
        <div id="logo"></div>
        <section class="top-links">
          <button type="button" class="btn btn-primary btn-lg">news</button>
          <button type="button" class="btn btn-primary btn-lg">get involved</button>
        </section>
      </section>
      <section class="secondary">
        <section class="nav-links">
          <a href="/">about</a>
          <a href="/">videos</a>
          <a href="/">podcasts</a>
          <a href="/">donate</a>
        </section>
      </section>
    </nav>
-->
