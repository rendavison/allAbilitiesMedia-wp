<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Abilities Media</title>

    <?php wp_head();?>

    <!-- FONTS AND STYLESHEETS -->
    <link rel="stylesheet" href="https://use.typekit.net/kma0tcc.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

  </head>
  <body>
    <a href="#main-content" class="skip-main">Skip to main content</a>

    <!--Main navigation-->
    <nav>
      <section class="primary">
        <div id="logo">
          <a href="/" aria-label="Links home">
            <img src="http://localhost:8080/allAbilities/wp-content/uploads/2020/10/AAM_logo_final-23-1.png"/>
          </a>
        </div>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-buttons'
          )
        );
        ?>

        <!-- Mobile nav -->
        <div id="mobile-nav" role="navigation"><i class="fas fa-bars"></i></div>
        <section id="mobile-links">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'mobile-nav'
            )
          );
          ?>
        </section>

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
      <!--
      <section class="sticky-nav">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'sticky-nav'
          )
        );
        ?>
      </section>
    -->
    </nav>
