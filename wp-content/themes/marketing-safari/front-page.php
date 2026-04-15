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

<!-- ══════════════════════════════════════════
     YELLOW WAVE BANNER
     ══════════════════════════════════════════ -->
<div class="yellow-wave-banner">
  <img src="<?php echo $img; ?>yellow-wave-banner.png" alt="Marketing, das seinen Weg kennt. Wir jagen keine Likes. Wir gewinnen Kunden.">
</div>

<!-- ══════════════════════════════════════════
     ZWEI SAFARIS SECTION
     ══════════════════════════════════════════ -->
<section class="safaris-section" id="leistungen">
  <div class="container">

    <h2 class="safaris-heading">Zwei Safaris, ein <em>Ziel:</em></h2>
    <p class="safaris-subtitle">Souveränes Marketing</p>
    <p class="safaris-intro">Du weißt, dass Marketing wichtig ist – aber dir fehlt der klare Weg. Marketing kostet Zeit, Nerven und Geld. Gute Agenturen sind in der Situation preislich noch nicht möglich. Social Media fühlt sich wie Beschäftigungstherapie an. Weil die nötige Orientierung und der Fokus fehlt.</p>

    <div class="safari-cards">

      <!-- Card 1: Online Marketing Safari -->
      <div class="safari-card">
        <div class="safari-card-header">
          <img src="<?php echo $img; ?>marketingsafari-icon-orange.svg" alt="" class="safari-card-icon">
          <h3 class="safari-card-title">Online Marketing <em>Safari</em></h3>
        </div>
        <p class="safari-card-tagline">4 Monate. Mehr Reichweite, mehr Leads, mehr Kunden – mit System.</p>
        <p class="safari-card-body">Die Online Marketing Safari ist ein 4-monatiges Intensiv-Coaching für Unternehmen, die ihr Online Marketing nicht länger auslagern, sondern selbst verstehen, planen und umsetzen wollen.<br><br>Wir nehmen dich mit auf eine geführte Safari durch den Marketing-Dschungel – mit klarer Struktur, praxisnahen Inhalten und persönlicher Begleitung.</p>
        <p class="safari-card-price">€ 4.000 pro Teilnehmer / Programm</p>
        <div class="safari-card-btns">
          <a href="#kontakt" class="btn-safari-primary">jetzt Info-Gespräch vereinbaren</a>
          <a href="#kontakt" class="btn-safari-secondary">mehr Informationen</a>
        </div>
      </div>

      <!-- Card 2: Content Creation Safari -->
      <div class="safari-card">
        <div class="safari-card-header">
          <img src="<?php echo $img; ?>marketingsafari-icon-gruen.svg" alt="" class="safari-card-icon">
          <h3 class="safari-card-title">Content Creation <em>Safari</em></h3>
        </div>
        <p class="safari-card-tagline">4 Monate. Content, der sichtbar macht, Vertrauen aufbaut und verkauft.</p>
        <p class="safari-card-body">Die Content Creation Safari ist ein 4-monatiges Coaching-Programm für Unternehmen, die ihren Content nicht mehr spontan oder nebenbei produzieren wollen, sondern strategisch, effizient und mit Wiedererkennungswert.<br><br>Wir zeigen dir, wie du Content selbst erstellst, der zu deiner Marke passt, gesehen wird und langfristig wirkt – vom Smartphone Setup bis zum Profi-Equipment.</p>
        <p class="safari-card-price">€ 4.000 pro Teilnehmer / Programm</p>
        <div class="safari-card-btns">
          <a href="#kontakt" class="btn-safari-primary">jetzt Info-Gespräch vereinbaren</a>
          <a href="#kontakt" class="btn-safari-secondary">mehr Informationen</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     SAFARI PROCESS SECTION — "So läuft deine Safari ab:"
     ══════════════════════════════════════════ -->
<section class="safari-process-section" id="safari">

  <div class="process-content">
    <h2 class="process-heading">So läuft deine <em>Safari</em> ab:</h2>
    <p class="process-subheading">Geführt, strukturiert &amp; auf Augenhöhe – mit ein paar wilden Überraschungen und jeder Menge Inspiration.</p>
    <p class="process-intro">Marketing ist keine einmalige Aktion, sondern eine Reise. Eine Reise, die Klarheit schafft, den Blick schärft und zeigt, welcher Weg wirklich zu deinem Unternehmen passt. Auf der Marketing Safari bist du nicht allein unterwegs: Du wirst begleitet, gefordert und unterstützt – Schritt für Schritt, Station für Station.</p>
  </div>

  <div class="process-steps">

    <div class="process-step process-step--1">
      <div class="process-step-inner">
        <span class="process-step-num">1</span>
        <span class="process-step-label">Kick-off &amp; Zieldefinition</span>
        <img src="<?php echo $img; ?>marketingsafari-pfeil-icon.svg" alt="" class="process-step-arrow">
      </div>
    </div>

    <div class="process-step process-step--2">
      <div class="process-step-inner">
        <span class="process-step-num">2</span>
        <span class="process-step-label">Gemeinsame Coaching-Termine</span>
        <img src="<?php echo $img; ?>marketingsafari-pfeil-icon.svg" alt="" class="process-step-arrow">
      </div>
    </div>

    <div class="process-step process-step--3">
      <div class="process-step-inner">
        <span class="process-step-num">3</span>
        <span class="process-step-label">Direkte Umsetzung</span>
        <img src="<?php echo $img; ?>marketingsafari-pfeil-icon.svg" alt="" class="process-step-arrow">
      </div>
    </div>

    <div class="process-step process-step--4">
      <div class="process-step-inner">
        <span class="process-step-num">4</span>
        <span class="process-step-label">Feedback &amp; Feinschliff</span>
        <img src="<?php echo $img; ?>marketingsafari-pfeil-icon.svg" alt="" class="process-step-arrow">
      </div>
    </div>

    <div class="process-step process-step--5">
      <div class="process-step-inner">
        <span class="process-step-num">5</span>
        <span class="process-step-label">Selbstständig weitergehen</span>
        <img src="<?php echo $img; ?>marketingsafari-pfeil-icon.svg" alt="" class="process-step-arrow">
      </div>
    </div>

  </div>

  <div class="process-content referenzen-block">
    <h2 class="process-heading">Referenzen aus der Praxis</h2>
    <p class="referenzen-lead">Die Projekte, die wir hier zeigen, haben wir in den vergangenen Jahren als Agentur Plappermaul umgesetzt und begleitet. Sie stehen für echte Herausforderungen, echte Unternehmen und messbare Ergebnisse – nicht für Theorie oder Testcases.</p>
    <p class="referenzen-body">Da die Nachfrage nach unserem Know-how stetig wächst, haben wir uns entschieden, dieses Wissen nicht mehr nur punktuell als Agenturleistung anzubieten. Mit Marketing Safari machen wir unsere Erfahrung erstmals in einem strukturierten Coaching-Programm für eine breitere Zielgruppe zugänglich. Damit du von dem profitierst, was sich in der Praxis hundertfach bewährt hat.</p>
    <img src="<?php echo $img; ?>referenzen-rectangle.png" alt="Referenzen aus der Praxis" class="referenzen-img">
  </div>

</section>

<?php get_footer(); ?>
