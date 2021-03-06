  <?php wp_footer();?>
    <div class="container-fluid" aria-hidden="true">
      <footer>
        <section class="logos">
          <h3>Keep in touch!</h4>
          <div class="break" aria-hidden="true"></div>
          <p>
            <a href="mailto:jennifer@unabridgedpress.com" aria-label="send us an email">Send us an email</a> or <a href="/get-involved" aria-label="get involved">get involved.</a>
          </p>
          <div class="break" aria-hidden="true"></div>
          <a href="https://www.unabridgedpress.com/">
            <img src="http://localhost:8080/allAbilities/wp-content/uploads/2020/10/UnabridgedPress_LogoTransparent-e1603910216566.png" alt="Unabridged Press logo; links to Unabridged Press website"/>
          </a>
          <a href="https://www.pointpark.edu/academics/schools/schoolofcommunication/CenterforMediaInnovation/index">
            <img src="https://allabilitiesmedia.org/wp-content/uploads/2020/09/PointPark_CMI_Logo-TransparentBkg.png" alt="Center for Media Innovation logo; links to CMI website" class="cmi"/>
          </a>
          <br />
        </section>

        <section role="navigation" class="footer-links">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer-links'
            )
          );
          ?>
        </section>
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
         s.setAttribute("data-type", "4");
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
