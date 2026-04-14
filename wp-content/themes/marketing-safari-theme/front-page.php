<?php get_header(); ?>
<?php $img = get_template_directory_uri() . '/images/'; ?>

<!-- ══════════════════════════════════════════
     HERO — pixel-perfect Figma match
     ══════════════════════════════════════════ -->
<section class="hero-section" id="hero">

  <!-- Turquoise bar far left with "by plappermaul" -->
  <div class="hero-green-bar">
    <span class="hero-green-bar-text">by plappermaul</span>
  </div>

  <!-- Left: image column with logo overlay -->
  <div class="hero-image-col">
    <img src="<?php echo $img; ?>hero-person.png" alt="Marketing Safari" class="hero-img">
    <div class="hero-logo-overlay">
      <img src="<?php echo $img; ?>hero-logo.png" alt="Marketing Safari Logo">
    </div>
  </div>

  <!-- Right: black content column -->
  <div class="hero-content-col">

    <!-- Navigation pills top right -->
    <nav class="hero-nav" aria-label="Hauptnavigation">
      <a href="#leistungen" class="hero-nav-pill">Unsere Coachings</a>
      <a href="#safari"     class="hero-nav-pill">So funktioniert's</a>
      <a href="#kontakt"    class="hero-nav-pill">Anfrage senden</a>
    </nav>

    <!-- Main heading -->
    <h1 class="hero-heading">
      Einfach selbstständig<br>
      durch den <em>Marketing<br>
      Dschungel</em> navigieren
    </h1>

    <!-- Sub-text -->
    <p class="hero-subtext">
      Marketing Safari ist ein Coaching Programm für Unternehmen und Marken die sichtbar werden,
      Reichweite aufbauen und konstant Kunden gewinnen wollen – ohne Agenturabhängigkeit.
    </p>

    <!-- Orange scroll-down circle -->
    <div class="hero-scroll">
      <a href="#intro" class="hero-scroll-btn" aria-label="Nach unten scrollen">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 5v14M5 12l7 7 7-7"/>
        </svg>
      </a>
    </div>

  </div>
</section>

<!-- INTRO: Zwei Safaris -->
<section class="intro-section" id="intro">
  <div class="container intro-grid">
    <div class="intro-text">
      <p class="section-overtitle">Was wir tun</p>
      <h2>Zwei Safaris.<br><em>Ein Ziel.</em></h2>
      <p>Marketing Safari steht für klare Strategie, ehrliche Kommunikation und messbare Ergebnisse. Wir bieten zwei spezialisierte Pakete, die perfekt auf deine Bedürfnisse zugeschnitten sind – von der Online-Marketing-Strategie bis zur professionellen Content-Produktion.</p>
      <p>Kein Schnickschnack. Keine leeren Versprechen. Nur echtes, nachhaltiges Wachstum für dein Business.</p>
      <a href="#leistungen" class="btn-primary">Safaris entdecken <img src="<?php echo $img; ?>marketingsafari-pfeil-icon-orange.svg" alt="" class="btn-arrow"></a>
    </div>
    <div class="intro-media">
      <img src="<?php echo $img; ?>marketingsafari-meeting.webp" alt="Marketing Safari Team" class="intro-img">
    </div>
  </div>
</section>

<!-- SERVICES (dark) -->
<section class="services-section" id="leistungen">
  <div class="container">
    <p class="section-overtitle green">Unsere Leistungen</p>
    <h2 class="white">Deine Safari beginnt hier</h2>
    <div class="services-grid">
      <div class="service-card">
        <img src="<?php echo $img; ?>marketingsafari-icon-onlinemarketingsafari.svg" alt="" class="service-icon">
        <h3>Online Marketing Safari</h3>
        <p>Maßgeschneiderte Online-Marketing-Strategie, die deine Zielgruppe erreicht und echte Kunden gewinnt.</p>
        <ul class="check-list">
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">SEO &amp; Content Marketing</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Social Media Marketing</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Google Ads &amp; Performance</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">E-Mail Marketing</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Analytics &amp; Reporting</li>
        </ul>
      </div>
      <div class="service-card">
        <img src="<?php echo $img; ?>marketingsafari-icon-contentcreationsafari.svg" alt="" class="service-icon">
        <h3>Content Creation Safari</h3>
        <p>Professioneller Content, der deine Marke zum Leben erweckt – von der Idee bis zur Veröffentlichung.</p>
        <ul class="check-list orange">
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="">Foto &amp; Video Produktion</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="">Social Media Content</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="">Blog &amp; Textproduktion</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="">Grafik Design &amp; Branding</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="">Reels &amp; Stories</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process-section" id="safari">
  <div class="container process-header-row">
    <div>
      <p class="section-overtitle orange">Der Prozess</p>
      <h2>So findet deine <em>Safari statt.</em></h2>
    </div>
  </div>
  <div class="process-steps">
    <div class="process-step"><div class="step-inner"><img src="<?php echo $img; ?>marketingsafari-icon-nummer-1.svg" alt="1" width="58" height="57"><div class="step-text"><h3>Kennenlernen &amp; Analyse</h3><p>Wir lernen dein Business kennen, analysieren den Markt und definieren gemeinsam deine Ziele.</p></div></div><div class="step-bar" style="background:#FFEF5F"></div></div>
    <div class="process-step"><div class="step-inner"><img src="<?php echo $img; ?>marketingsafari-icon-nummer-2.svg" alt="2" width="58" height="57"><div class="step-text"><h3>Strategie entwickeln</h3><p>Basierend auf den Erkenntnissen entwickeln wir eine maßgeschneiderte Marketing-Strategie.</p></div></div><div class="step-bar" style="background:#77E7AC"></div></div>
    <div class="process-step"><div class="step-inner"><img src="<?php echo $img; ?>marketingsafari-icon-nummer-3.svg" alt="3" width="58" height="57"><div class="step-text"><h3>Umsetzung starten</h3><p>Wir setzen die Strategie konsequent und kreativ um – schnell, präzise und auf den Punkt.</p></div></div><div class="step-bar" style="background:#FF7B29"></div></div>
    <div class="process-step"><div class="step-inner"><img src="<?php echo $img; ?>marketingsafari-icon-nummer-4.svg" alt="4" width="58" height="57"><div class="step-text"><h3>Optimieren &amp; Skalieren</h3><p>Kontinuierliches Monitoring und datenbasierte Optimierung für maximale Performance.</p></div></div><div class="step-bar" style="background:#C29AFF"></div></div>
    <div class="process-step"><div class="step-inner"><img src="<?php echo $img; ?>marketingsafari-icon-nummer-5.svg" alt="5" width="58" height="57"><div class="step-text"><h3>Erfolg messen</h3><p>Transparentes Reporting und klare KPIs zeigen dir, was dein Marketing-Investment bringt.</p></div></div><div class="step-bar" style="background:#71E7FF"></div></div>
  </div>
</section>

<!-- IMPRESSIONS -->
<section class="impressions-section">
  <div class="container">
    <p class="section-overtitle orange">Einblicke</p>
    <h2>Impressionen</h2>
    <div class="impressions-grid">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-1.webp" alt="">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-2.webp" alt="">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-3.webp" alt="">
    </div>
  </div>
</section>

<!-- ONLINE MARKETING SAFARI (orange form) -->
<section class="booking-section" id="kontakt">
  <div class="container">
    <div class="booking-card booking-orange">
      <div class="booking-text">
        <h2>Online Marketing Safari anfragen</h2>
        <p>Bereit für mehr Reichweite, mehr Kunden und nachhaltiges Wachstum? Starte jetzt deine Online Marketing Safari.</p>
        <ul class="check-list dark">
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Kostenloses Erstgespräch</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Individuelle Strategie</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Messbare Ergebnisse</li>
        </ul>
      </div>
      <form class="booking-form" method="post">
        <div class="form-row"><input type="text" placeholder="Vorname"><input type="text" placeholder="Nachname"></div>
        <input type="email" placeholder="E-Mail Adresse">
        <input type="tel" placeholder="Telefon">
        <input type="text" placeholder="Unternehmen">
        <textarea rows="4" placeholder="Deine Nachricht..."></textarea>
        <button type="submit" class="btn-book">Safari anfragen →</button>
      </form>
    </div>

    <!-- CONTENT CREATION SAFARI (green form) -->
    <div class="booking-card booking-green">
      <div class="booking-text">
        <h2>Content Creation Safari anfragen</h2>
        <p>Von Fotos bis Videos, von Posts bis Reels – wir produzieren Content, der deine Zielgruppe begeistert.</p>
        <ul class="check-list dark">
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Professionelle Produktion</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Kreative Konzepte</li>
          <li><img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="">Schnelle Lieferung</li>
        </ul>
      </div>
      <form class="booking-form" method="post">
        <div class="form-row"><input type="text" placeholder="Vorname"><input type="text" placeholder="Nachname"></div>
        <input type="email" placeholder="E-Mail Adresse">
        <input type="tel" placeholder="Telefon">
        <input type="text" placeholder="Unternehmen">
        <textarea rows="4" placeholder="Beschreibe deinen Content-Bedarf..."></textarea>
        <button type="submit" class="btn-book">Content anfragen →</button>
      </form>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section">
  <div class="container about-grid">
    <div class="about-text">
      <p class="section-overtitle orange">Über Marketing Safari</p>
      <h2>Herzlich <em>Willkommen!</em></h2>
      <p>Marketing Safari ist deine Agentur für ehrliches, effektives und kreatives Marketing. Wir glauben daran, dass erfolgreiches Marketing auf echten Beziehungen und echtem Mehrwert basiert.</p>
      <p>Als spezialisierte Boutique-Agentur bieten wir persönliche Betreuung, direkte Kommunikation und Strategien, die wirklich funktionieren.</p>
      <a href="#kontakt" class="btn-primary">Jetzt starten <img src="<?php echo $img; ?>marketingsafari-pfeil-icon-orange.svg" alt="" class="btn-arrow"></a>
    </div>
    <div class="about-media">
      <img src="<?php echo $img; ?>marketingsafari-meeting.webp" alt="Marketing Safari">
    </div>
  </div>
</section>

<!-- CTA DARK -->
<section class="cta-section">
  <div class="cta-bg-img"><img src="<?php echo $img; ?>marketingsafari-slider-1-4.webp" alt=""></div>
  <div class="container cta-inner">
    <p class="section-overtitle green">Auf geht's!</p>
    <h2>Auf geht's zur <em class="orange">Safari!</em></h2>
    <p>Keine Ausreden mehr. Starte jetzt deine Marketing Safari.</p>
    <a href="#kontakt" class="btn-primary">Kostenloses Erstgespräch <img src="<?php echo $img; ?>marketingsafari-pfeil-icon.svg" alt="" class="btn-arrow-dark"></a>
  </div>
</section>

<!-- ÜBER MICH -->
<section class="team-section" id="ueber-mich">
  <div class="container team-grid">
    <div class="team-media">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-5.webp" alt="Marketing Safari Team">
    </div>
    <div class="team-text">
      <p class="section-overtitle orange">Über mich</p>
      <h2>Dein Partner für <em>echtes Marketing.</em></h2>
      <p>Ich bin leidenschaftlicher Marketeer mit jahrelanger Erfahrung in digitalen Strategien, Content-Produktion und Performance-Marketing.</p>
      <p>Datengetrieben, kreativ und immer mit dem Ziel, echte Ergebnisse zu liefern. Keine Spielereien, keine leeren Versprechen.</p>
    </div>
  </div>
</section>

<!-- REFERENCES / GALLERY -->
<section class="gallery-section">
  <div class="container">
    <p class="section-overtitle orange">Referenzen</p>
    <h2>Unsere Arbeit</h2>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-6.webp" alt="">
        <p class="gallery-caption">Content Creation<br><strong>Stadtgemeinde Bad Hall</strong></p>
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-2.webp" alt="">
        <p class="gallery-caption">Content Creation<br><strong>Modehaus Kutsam</strong></p>
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-3.webp" alt="">
        <p class="gallery-caption">Content Creation<br><strong>Tourismusverband Attersee-Attergau</strong></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
