  <?php wp_footer();?>
    <div class="container-fluid" aria-hidden="true">
      <footer>
        <section class="logos">
          <img src="http://localhost:8080/allAbilities/wp-content/uploads/2020/10/UnabridgedPress_LogoTransparent.png" style="margin-bottom: 2rem;"/>
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
    <!--Userway widget-->
    <script>
      (function(d){
         var s = d.createElement("script");
         /* uncomment the following line to override default position*/
         /* s.setAttribute("data-position", 3);*/
         /* uncomment the following line to override default size (values: small, large)*/
         /* s.setAttribute("data-size", "large");*/
         /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
         /* s.setAttribute("data-language", "en-US");*/
         /* uncomment the following line to override color set via widget (e.g., #053f67)*/
         /* s.setAttribute("data-color", "#2d68ff");*/
         /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
         /* s.setAttribute("data-type", "1");*/
         /* s.setAttribute("data-statement_text:", "Our Accessibility Statement");*/
         /* s.setAttribute("data-statement_url", "http://www.example.com/accessibility";*/
         /* uncomment the following line to override support on mobile devices*/
         /* s.setAttribute("data-mobile", true);*/
         /* uncomment the following line to set custom trigger action for accessibility menu*/
         /* s.setAttribute("data-trigger", "triggerId")*/
         s.setAttribute("data-account", "ZEQU4bRA7Q");
         s.setAttribute("src", "https://cdn.userway.org/widget.js");
         (d.body || d.head).appendChild(s);})(document)
 </script>
  <noscript>
  Please ensure Javascript is enabled for purposes of
  <a href="https://userway.org">website accessibility</a>
  </noscript>
  </body>
</html>
