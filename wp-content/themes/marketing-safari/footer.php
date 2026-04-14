<?php $img = get_template_directory_uri() . '/images/'; ?>

<footer class="site-footer">
  <div class="footer-body">
    <div class="container">
      <div class="footer-inner">
        <img src="<?php echo $img; ?>marketingsafari-logo-weiß.svg" alt="Marketing Safari" class="footer-logo-img">
        <div class="footer-contact-col">
          <p>
            Marketing Safari<br>
            hello@marketingsafari.at<br>
            marketingsafari.at
          </p>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="footer-by">Made with ♥ by <a href="https://plappermaul.at" target="_blank">plappermaul</a></p>
        <nav class="footer-legal">
          <a href="/impressum">Impressum</a>
          <a href="/datenschutz">Datenschutz</a>
          <a href="/agb">AGB</a>
        </nav>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
