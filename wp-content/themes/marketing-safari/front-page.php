<?php get_header(); ?>
<?php $img = get_template_directory_uri() . '/images/'; ?>

<!-- ══════════════════════════════════════════
     HERO
     ══════════════════════════════════════════ -->
<section class="hero-section" id="hero">

  <!-- Green column 50% -->
  <div class="hero-green-bar">
    <span class="hero-green-bar-text">by plappermaul</span>
  </div>

  <!-- Right side 50%: image col + black content col -->
  <div class="hero-right">

    <div class="hero-image-col">
      <img src="<?php echo $img; ?>hero-person.png" alt="Marketing Safari" class="hero-img">
      <div class="hero-logo-overlay">
        <img src="<?php echo $img; ?>hero-logo.png" alt="Marketing Safari">
      </div>
    </div>

    <div class="hero-content-col">

      <nav class="hero-nav" aria-label="Navigation">
        <a href="#leistungen" class="hero-nav-pill">Unsere Coachings</a>
        <a href="#safari"     class="hero-nav-pill">So funktioniert's</a>
        <a href="#kontakt"    class="hero-nav-pill">Anfrage senden</a>
      </nav>

      <h1 class="hero-heading">
        Einfach selbstständig<br>
        durch den <em>Marketing<br>
        Dschungel</em> navigieren
      </h1>

      <p class="hero-subtext">
        Marketing Safari ist ein Coaching Programm für Unternehmen und Marken die sichtbar werden,
        Reichweite aufbauen und konstant Kunden gewinnen wollen – ohne Agenturabhängigkeit.
      </p>

      <div class="hero-scroll">
        <a href="#intro" class="hero-scroll-btn" aria-label="Nach unten scrollen">
          <img src="<?php echo $img; ?>marketingsafari-pfeil-icon-orange.svg" alt="">
        </a>
      </div>

    </div>
  </div>

</section>

<!-- ══════════════════════════════════════════
     TEXT INTRO (white bg, Gibson-style)
     ══════════════════════════════════════════ -->
<section class="text-intro-section">
  <div class="container">
    <p>Wir begleiten Unternehmen auf ihrer Safari durch Online Marketing und Content Creation – mit dem Ziel, dass sie nachhaltig, selbstständig und sicher agieren können. Warum? Weil gutes Marketing kein Geheimwissen sein sollte.</p>
    <p>Wir glauben daran, dass Unternehmen ihr Online Marketing verstehen, steuern und selbst umsetzen können – wenn sie die richtigen Werkzeuge, Strukturen und Strategien kennen.</p>
  </div>
</section>

<?php get_footer(); ?>
