<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Abilities Media</title>

    <?php wp_head();?>
    <!-- Import Adobe Font -->
    <link rel="stylesheet" href="https://use.typekit.net/kma0tcc.css">
  </head>
  <body>
    <a href="#main-content" class="skip-main">Skip to main content</a>

    <!--Main navigation-->
    <nav>
      <section class="primary">
        <div id="logo">
          <a href="/allAbilities" aria-label="Links home">
            <img src="http://localhost:8080/allAbilities/wp-content/uploads/2020/10/AAM_logo_final-23-1.png"/>
          </a>
          <!--<span class="title">
            <a href="/" aria-label="All-Abilities Media; links home">All-Abilities Media</a>
          </span>-->
        </div>
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
      <section class="sticky-nav">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'sticky-nav'
          )
        );
        ?>
      </section>
    </nav>
