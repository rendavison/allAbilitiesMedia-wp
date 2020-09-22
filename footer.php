  <?php wp_footer();?>
    <div class="container-fluid" aria-hidden="true">
      <footer>
        <section class="logos">
          <img src="http://localhost:8080/allAbilities/wp-content/uploads/2020/09/UnPressLogoWhite.png" style="margin-bottom: 2rem;"/>
          <img src="http://localhost:8080/allAbilities/wp-content/uploads/2020/09/PointPark_CMI_Logo-TransparentBkg.png" /><br />
        </section>

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-links'
          )
        );
        ?>
      </footer>
    </div>
  </body>
</html>
