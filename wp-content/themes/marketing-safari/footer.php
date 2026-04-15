<?php $img = get_template_directory_uri() . '/images/'; ?>

<footer class="site-footer">
  <div class="footer-main">
    <div class="footer-logo-col">
      <img src="<?php echo $img; ?>marketingsafari-logo-weiß.svg" alt="Marketing Safari" class="footer-logo-img">
    </div>
    <div class="footer-info-col">
      <address class="footer-address">
        office@plappermaul.at<br>
        +43 (0) 699 17 09 4217<br>
        Mühlgruberstraße 42,<br>
        4540 Pfarrkirchen bei Bad Hall
      </address>
    </div>
  </div>
  <div class="footer-bottom-bar">
    <span class="footer-by">by plappermaul</span>
    <nav class="footer-legal">
      <a href="/impressum">Impressum</a>
      <a href="/datenschutz">Datenschutz</a>
      <a href="<?php echo $img; ?>marketingsafari-agbs.pdf" download>AGB</a>
    </nav>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
