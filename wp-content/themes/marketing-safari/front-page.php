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

  <!-- Black panel bg (clip-path diagonal, visual only) -->
  <div class="hero-content-col"></div>

  <!-- Logo over the photo -->
  <div class="hero-logo">
    <img src="<?php echo $img; ?>hero-logo.png" alt="Marketing Safari">
  </div>

  <!-- Content overlay: same footprint as black panel, no clip, holds all text -->
  <div class="hero-content-overlay">

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

    <a href="#intro" class="hero-scroll-btn" aria-label="Nach unten scrollen">
      <img src="<?php echo $img; ?>marketingsafari-pfeil-icon-orange.svg" alt="">
    </a>

  </div>

</section>

<!-- ══════════════════════════════════════════
     TEXT INTRO
     ══════════════════════════════════════════ -->
<section class="text-intro-section" id="intro">
  <div class="container">

    <p class="intro-text">Wir begleiten Unternehmen auf ihrer Safari durch Online Marketing und Content Creation – mit dem Ziel, dass sie nachhaltig, selbstständig und sicher agieren können. Warum? Weil gutes Marketing kein Geheimwissen sein sollte. Wir glauben daran, dass Unternehmen ihr Online Marketing verstehen, steuern und selbst umsetzen können – wenn sie die richtigen Werkzeuge, Strukturen und Strategien kennen.</p>

    <div class="intro-features">
      <div class="intro-feature">
        <img src="<?php echo $img; ?>marketingsafari-icon-orange.svg" alt="" class="intro-feature-icon">
        <span class="intro-feature-label">verständlich<br>statt kompliziert</span>
      </div>
      <div class="intro-feature">
        <img src="<?php echo $img; ?>marketingsafari-icon-lila.svg" alt="" class="intro-feature-icon">
        <span class="intro-feature-label">praxisnah<br>statt theoretisch</span>
      </div>
      <div class="intro-feature">
        <img src="<?php echo $img; ?>marketingsafari-icon-gruen.svg" alt="" class="intro-feature-icon">
        <span class="intro-feature-label">über 14 Jahre<br>Agenturerfahrung</span>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
