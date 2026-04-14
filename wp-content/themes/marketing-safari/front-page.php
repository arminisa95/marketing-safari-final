<?php get_header(); ?>
<?php $img = get_template_directory_uri() . '/images/'; ?>

<!-- ══════════════════════════════════════════
     HERO
     ══════════════════════════════════════════ -->
<section class="hero-section" id="hero">

  <div class="hero-green-bar">
    <span class="hero-green-bar-text">by plappermaul</span>
  </div>

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
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 5v14M5 12l7 7 7-7"/>
        </svg>
      </a>
    </div>

  </div>
</section>

<?php get_footer(); ?>
