  <?php wp_footer();?>
    <div class="container-fluid" aria-hidden="true">
      <footer>
        <img src="https://via.placeholder.com/350x100" />
        <img src="https://via.placeholder.com/350x100" />
        
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-links'
          )
        );
        ?>

        <!---
        <img src="https://via.placeholder.com/350x100" />
        <img src="https://via.placeholder.com/350x100" />
        <ul class="footer-links">
          <li>
            This is where we put disclosure information.
          </li>
          <li><a href="/">about us</a></li>
          <li><a href="/">videos</a></li>
          <li><a href="/">podcasts</a></li>
          <li><a href="/">workshops</a></li>
          <li><a href="/">get involved</a></li>
        </ul>
        --->
      </footer>
    </div>
  </body>
</html>
