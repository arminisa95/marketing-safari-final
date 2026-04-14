<?php get_header(); ?>
<?php $img = get_template_directory_uri() . '/images/'; ?>

<!-- ══════════════════════════════════════════
     HERO — 1920×1080 Figma pixel-accurate
     ══════════════════════════════════════════ -->
<section class="hero-section" id="hero">

  <!-- Green bar: 48.59px / 1920 = 2.53% -->
  <div class="hero-green-bar">
    <span class="hero-green-bar-text">by plappermaul</span>
  </div>

  <!-- Hero photo: left 2.43%, width 43.57% -->
  <img src="<?php echo $img; ?>hero-person.png" alt="" class="hero-img">

  <!-- Black content panel: left 41.1%, 6° diagonal clip -->
  <div class="hero-content-col"></div>

  <!-- Logo: left 5.22%, top 2.78% -->
  <div class="hero-logo">
    <img src="<?php echo $img; ?>hero-logo.png" alt="Marketing Safari">
  </div>

  <!-- Nav pills: top 3.31%, right-aligned -->
  <nav class="hero-nav" aria-label="Navigation">
    <a href="#leistungen" class="hero-nav-pill">Unsere Coachings</a>
    <a href="#safari"     class="hero-nav-pill">So funktioniert's</a>
    <a href="#kontakt"    class="hero-nav-pill">Anfrage senden</a>
  </nav>

  <!-- Heading: left 50%, top 20.18%, font 94px -->
  <h1 class="hero-heading">
    Einfach selbstständig<br>
    durch den <em>Marketing<br>
    Dschungel</em> navigieren
  </h1>

  <!-- Subtext: left 51.91%, top 69.26%, font 35px -->
  <p class="hero-subtext">
    Marketing Safari ist ein Coaching Programm für Unternehmen und Marken die sichtbar werden,
    Reichweite aufbauen und konstant Kunden gewinnen wollen – ohne Agenturabhängigkeit.
  </p>

  <!-- Scroll arrow: left 93.79%, top 87.8% -->
  <a href="#intro" class="hero-scroll-btn" aria-label="Nach unten scrollen">
    <img src="<?php echo $img; ?>marketingsafari-pfeil-icon-orange.svg" alt="">
  </a>

</section>

<!-- ══════════════════════════════════════════
     TEXT INTRO
     ══════════════════════════════════════════ -->
<section class="text-intro-section" id="intro">
  <div class="container">
    <p>Wir begleiten Unternehmen auf ihrer Safari durch Online Marketing und Content Creation – mit dem Ziel, dass sie nachhaltig, selbstständig und sicher agieren können. Warum? Weil gutes Marketing kein Geheimwissen sein sollte.</p>
    <p>Wir glauben daran, dass Unternehmen ihr Online Marketing verstehen, steuern und selbst umsetzen können – wenn sie die richtigen Werkzeuge, Strukturen und Strategien kennen.</p>
  </div>
</section>

<?php get_footer(); ?>
