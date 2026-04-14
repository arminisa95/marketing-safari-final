<?php get_header(); ?>

<?php
$img = get_template_directory_uri() . '/images/';
?>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero-section" id="hero">

  <!-- Left: Hero Image (with diagonal clip + green strip) -->
  <div class="hero-image-col">
    <img src="<?php echo $img; ?>marketingsafari-hero-bild.webp"
         alt="Marketing Safari Team"
         width="836" height="1080">
  </div>

  <!-- Right: Text Content -->
  <div class="hero-content-col">
    <span class="hero-tag">Marketing Agentur</span>

    <h1 class="hero-heading">
      Marketing, das<br>
      seinen Weg <em>kennt.</em>
    </h1>

    <p class="hero-subtext">
      Wir jagen keine Likes. Wir gewinnen Kunden.
      Datengetriebene Strategien &amp; kreativer Content
      für deinen nachhaltigen Wachstum.
    </p>

    <div class="hero-btns">
      <a href="#kontakt" class="btn-primary">
        Kostenloses Erstgespräch
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="#leistungen" class="btn-secondary">
        Leistungen entdecken
      </a>
    </div>

    <div class="hero-stats">
      <div class="hero-stat">
        <img src="<?php echo $img; ?>marketingsafari-icon-gruen.svg" alt="Online Marketing" width="40" height="40">
        <div class="hero-stat-text">
          <strong>Online Marketing</strong>
          Safari
        </div>
      </div>
      <div class="hero-stat">
        <img src="<?php echo $img; ?>marketingsafari-icon-orange.svg" alt="Content Creation" width="40" height="40">
        <div class="hero-stat-text">
          <strong>Content Creation</strong>
          Safari
        </div>
      </div>
      <div class="hero-stat">
        <img src="<?php echo $img; ?>marketingsafari-icon-lila.svg" alt="Strategie" width="40" height="40">
        <div class="hero-stat-text">
          <strong>Strategie</strong>
          & Beratung
        </div>
      </div>
    </div>
  </div>

</section>


<!-- ============================================================
     INTRO / OVER SECTION
     ============================================================ -->
<section class="intro-section">
  <div class="container">
    <div>
      <span class="intro-label">Was wir tun</span>
      <h2 class="intro-heading">
        Zwei Safaris.<br>
        <em>Ein Ziel.</em>
      </h2>
      <p class="intro-body">
        Marketing Safari steht für klare Strategie, ehrliche Kommunikation
        und messbare Ergebnisse. Wir bieten zwei spezialisierte Pakete,
        die perfekt auf deine Bedürfnisse zugeschnitten sind – von der
        Online-Marketing-Strategie bis zur professionellen Content-Produktion.
      </p>
      <p class="intro-body">
        Kein Schnickschnack. Keine leeren Versprechen.
        Nur echtes, nachhaltiges Wachstum für dein Business.
      </p>
      <a href="#leistungen" class="btn-primary">
        Safaris entdecken
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
    <div class="intro-image">
      <img src="<?php echo $img; ?>marketingsafari-meeting.webp"
           alt="Marketing Safari Meeting" width="600" height="480">
    </div>
  </div>
</section>


<!-- ============================================================
     SERVICES SECTION (dark)
     ============================================================ -->
<section class="services-section" id="leistungen">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Unsere Leistungen</span>
      <h2 class="section-title">Deine Safari beginnt hier</h2>
    </div>

    <div class="services-grid">

      <!-- Card 1: Online Marketing Safari -->
      <div class="service-card">
        <div class="service-card-icon">
          <img src="<?php echo $img; ?>marketingsafari-icon-gruen.svg" alt="Online Marketing Safari" width="64" height="64">
        </div>
        <h3 class="service-card-title">Online Marketing Safari</h3>
        <p class="service-card-desc">
          Wir entwickeln eine maßgeschneiderte Online-Marketing-Strategie
          die deine Zielgruppe erreicht und echte Kunden gewinnt.
        </p>
        <ul class="service-card-list">
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
            SEO &amp; Content Marketing
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
            Social Media Marketing
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
            Google Ads &amp; Performance
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
            E-Mail Marketing
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
            Analytics &amp; Reporting
          </li>
        </ul>
      </div>

      <!-- Card 2: Content Creation Safari -->
      <div class="service-card">
        <div class="service-card-icon">
          <img src="<?php echo $img; ?>marketingsafari-icon-orange.svg" alt="Content Creation Safari" width="64" height="64">
        </div>
        <h3 class="service-card-title">Content Creation Safari</h3>
        <p class="service-card-desc">
          Professioneller Content, der deine Marke zum Leben erweckt –
          von der Idee bis zur Veröffentlichung, alles aus einer Hand.
        </p>
        <ul class="service-card-list">
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" width="20" height="19">
            Foto &amp; Video Produktion
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" width="20" height="19">
            Social Media Content
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" width="20" height="19">
            Blog &amp; Textproduktion
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" width="20" height="19">
            Grafik Design &amp; Branding
          </li>
          <li>
            <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" width="20" height="19">
            Reels &amp; Stories
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     PROCESS SECTION ("So findet deine Safari statt")
     5 farbige full-width Zeilen - exakt aus SVG
     ============================================================ -->
<section class="process-section" id="safari">
  <div class="process-header">
    <div class="container">
      <div>
        <span class="section-label" style="color: var(--orange);">Der Prozess</span>
        <h2 class="section-title-dark">
          So findet deine<br>
          <span style="color: var(--green);">Safari statt.</span>
        </h2>
      </div>
      <div>
        <p style="font-size:16px; color:#555; line-height:1.7;">
          Von der ersten Idee bis zum messbaren Erfolg –
          unser bewährter 5-Schritte-Prozess bringt dein
          Marketing auf das nächste Level.
        </p>
      </div>
    </div>
  </div>

  <!-- Step 1: Yellow #FFEF5F -->
  <div class="process-step-row">
    <div class="process-step-inner">
      <div class="process-step-num">
        <img src="<?php echo $img; ?>marketingsafari-icon-nummer-1.svg" alt="1" width="58" height="57">
      </div>
      <div class="process-step-text">
        <h3 class="process-step-title">Kennenlernen &amp; Analyse</h3>
        <p class="process-step-desc">Wir lernen dein Business kennen, analysieren den Markt und definieren gemeinsam deine Ziele.</p>
      </div>
    </div>
    <div class="process-step-bar" style="background: #FFEF5F;"></div>
  </div>

  <!-- Step 2: Green #77E7AC -->
  <div class="process-step-row">
    <div class="process-step-inner">
      <div class="process-step-num">
        <img src="<?php echo $img; ?>marketingsafari-icon-nummer-2.svg" alt="2" width="58" height="57">
      </div>
      <div class="process-step-text">
        <h3 class="process-step-title">Strategie entwickeln</h3>
        <p class="process-step-desc">Basierend auf den Erkenntnissen entwickeln wir eine maßgeschneiderte Marketing-Strategie.</p>
      </div>
    </div>
    <div class="process-step-bar" style="background: #77E7AC;"></div>
  </div>

  <!-- Step 3: Orange #FF7B29 -->
  <div class="process-step-row">
    <div class="process-step-inner">
      <div class="process-step-num">
        <img src="<?php echo $img; ?>marketingsafari-icon-nummer-3.svg" alt="3" width="58" height="57">
      </div>
      <div class="process-step-text">
        <h3 class="process-step-title">Umsetzung starten</h3>
        <p class="process-step-desc">Wir setzen die Strategie konsequent und kreativ um – schnell, präzise und auf den Punkt.</p>
      </div>
    </div>
    <div class="process-step-bar" style="background: #FF7B29;"></div>
  </div>

  <!-- Step 4: Purple #C29AFF -->
  <div class="process-step-row">
    <div class="process-step-inner">
      <div class="process-step-num">
        <img src="<?php echo $img; ?>marketingsafari-icon-nummer-4.svg" alt="4" width="58" height="57">
      </div>
      <div class="process-step-text">
        <h3 class="process-step-title">Optimieren &amp; Skalieren</h3>
        <p class="process-step-desc">Kontinuierliches Monitoring und datenbasierte Optimierung für maximale Performance.</p>
      </div>
    </div>
    <div class="process-step-bar" style="background: #C29AFF;"></div>
  </div>

  <!-- Step 5: Cyan #71E7FF -->
  <div class="process-step-row">
    <div class="process-step-inner">
      <div class="process-step-num">
        <img src="<?php echo $img; ?>marketingsafari-icon-nummer-5.svg" alt="5" width="58" height="57">
      </div>
      <div class="process-step-text">
        <h3 class="process-step-title">Erfolg messen</h3>
        <p class="process-step-desc">Transparentes Reporting und klare KPIs zeigen dir, was dein Marketing-Investment bringt.</p>
      </div>
    </div>
    <div class="process-step-bar" style="background: #71E7FF;"></div>
  </div>

</section>


<!-- ============================================================
     IMPRESSIONS SECTION
     ============================================================ -->
<section class="impressions-section">
  <div class="container">
    <div class="section-header">
      <span class="section-label" style="color: var(--orange);">Einblicke</span>
      <h2 class="section-title-dark">Impressionen</h2>
    </div>
    <div class="impressions-grid">
      <div class="impression-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-1.webp" alt="Impression 1" width="400" height="300">
      </div>
      <div class="impression-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-2.webp" alt="Impression 2" width="400" height="300">
      </div>
      <div class="impression-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-3.webp" alt="Impression 3" width="400" height="300">
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     BOOKING SECTIONS (orange + green)
     ============================================================ -->
<section class="booking-section" id="kontakt">
  <div class="container">

    <!-- Online Marketing Safari -->
    <div class="booking-card orange">
      <div class="booking-card-inner">
        <div>
          <h2 class="booking-card-title">
            Online Marketing<br>Safari anfragen
          </h2>
          <p class="booking-card-desc">
            Bereit für mehr Reichweite, mehr Kunden und
            nachhaltiges Wachstum? Starte jetzt deine
            Online Marketing Safari.
          </p>
          <ul class="booking-card-features">
            <li>
              <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
              Kostenloses Erstgespräch
            </li>
            <li>
              <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
              Individuelle Strategie
            </li>
            <li>
              <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
              Messbare Ergebnisse
            </li>
          </ul>
        </div>
        <form class="booking-form" method="post" action="#">
          <div class="booking-form-row">
            <input type="text" name="vorname" placeholder="Vorname" required>
            <input type="text" name="nachname" placeholder="Nachname" required>
          </div>
          <input type="email" name="email" placeholder="E-Mail Adresse" required>
          <input type="tel" name="telefon" placeholder="Telefon (optional)">
          <input type="text" name="firma" placeholder="Unternehmen">
          <textarea name="nachricht" placeholder="Deine Nachricht / Ziele..."></textarea>
          <button type="submit" class="btn-book">
            Safari anfragen
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </form>
      </div>
    </div>

    <!-- Content Creation Safari -->
    <div class="booking-card green">
      <div class="booking-card-inner">
        <div>
          <h2 class="booking-card-title">
            Content Creation<br>Safari anfragen
          </h2>
          <p class="booking-card-desc">
            Von Fotos bis Videos, von Posts bis Reels –
            wir produzieren Content, der deine Zielgruppe
            begeistert und konvertiert.
          </p>
          <ul class="booking-card-features">
            <li>
              <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
              Professionelle Produktion
            </li>
            <li>
              <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
              Kreative Konzepte
            </li>
            <li>
              <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" width="20" height="19">
              Schnelle Lieferung
            </li>
          </ul>
        </div>
        <form class="booking-form" method="post" action="#">
          <div class="booking-form-row">
            <input type="text" name="vorname" placeholder="Vorname" required>
            <input type="text" name="nachname" placeholder="Nachname" required>
          </div>
          <input type="email" name="email" placeholder="E-Mail Adresse" required>
          <input type="tel" name="telefon" placeholder="Telefon (optional)">
          <input type="text" name="firma" placeholder="Unternehmen">
          <textarea name="nachricht" placeholder="Beschreibe deinen Content-Bedarf..."></textarea>
          <button type="submit" class="btn-book">
            Content anfragen
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </form>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     ABOUT / HERZLICH WILLKOMMEN
     ============================================================ -->
<section class="about-section">
  <div class="container">
    <div>
      <span class="about-label">Über Marketing Safari</span>
      <h2 class="about-heading">
        Herzlich<br>
        <em>Willkommen!</em>
      </h2>
      <p class="about-body">
        Marketing Safari ist deine Agentur für ehrliches, effektives
        und kreatives Marketing. Wir glauben daran, dass erfolgreiches
        Marketing auf echten Beziehungen und echtem Mehrwert basiert –
        nicht auf hohlen Kennzahlen und kurzlebigen Trends.
      </p>
      <p class="about-body">
        Als spezialisierte Boutique-Agentur bieten wir dir persönliche
        Betreuung, direkte Kommunikation und Strategien, die wirklich
        funktionieren. Dein Erfolg ist unsere Mission.
      </p>
      <a href="#kontakt" class="btn-primary" style="margin-top: 16px; display: inline-flex;">
        Jetzt starten
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
    <div class="about-image">
      <img src="<?php echo $img; ?>marketingsafari-meeting.webp"
           alt="Marketing Safari" width="600" height="560">
    </div>
  </div>
</section>


<!-- ============================================================
     CTA SECTION (dark with image bg)
     ============================================================ -->
<section class="cta-section">
  <div class="cta-bg">
    <img src="<?php echo $img; ?>marketingsafari-slider-1-4.webp" alt="" width="1920" height="600">
  </div>
  <div class="container">
    <span class="cta-label">Auf geht's!</span>
    <h2 class="cta-heading">
      Auf geht's zur<br>
      <em>Safari!</em>
    </h2>
    <p class="cta-subtext">
      Keine Ausreden mehr. Starte jetzt deine Marketing Safari
      und bringe dein Business auf das nächste Level.
    </p>
    <a href="#kontakt" class="btn-primary" style="margin: 0 auto; display: inline-flex;">
      Kostenloses Erstgespräch
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>


<!-- ============================================================
     TEAM / ÜBER MICH
     ============================================================ -->
<section class="team-section" id="ueber-mich">
  <div class="container">
    <div class="team-image">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-5.webp"
           alt="Marketing Safari Team" width="600" height="520">
    </div>
    <div>
      <span class="team-label">Über mich</span>
      <h2 class="team-heading">
        Dein Partner für<br>
        <em>echtes Marketing.</em>
      </h2>
      <p class="team-body">
        Ich bin leidenschaftlicher Marketeer mit jahrelanger Erfahrung
        in digitalen Strategien, Content-Produktion und Performance-Marketing.
        Marketing Safari ist mehr als eine Agentur – es ist meine Mission,
        Unternehmen beim Wachsen zu helfen.
      </p>
      <p class="team-body">
        Datengetrieben, kreativ und immer mit dem Ziel, echte Ergebnisse
        zu liefern. Keine Spielereien, keine leeren Versprechen.
        Nur echtes, nachhaltiges Marketing, das funktioniert.
      </p>
      <div class="team-name">Marketing Safari Team</div>
      <div class="team-role">Marketing Strategie & Content</div>
    </div>
  </div>
</section>


<!-- ============================================================
     GALLERY SECTION
     ============================================================ -->
<section class="gallery-section">
  <div class="container">
    <div class="section-header" style="margin-bottom: 40px;">
      <span class="section-label" style="color: var(--orange);">Galerie</span>
      <h2 class="section-title-dark">Einblicke in unsere Arbeit</h2>
    </div>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-1.webp" alt="Gallery 1" width="400" height="280">
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-2.webp" alt="Gallery 2" width="400" height="280">
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-3.webp" alt="Gallery 3" width="400" height="280">
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-4.webp" alt="Gallery 4" width="400" height="280">
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-5.webp" alt="Gallery 5" width="400" height="280">
      </div>
      <div class="gallery-item">
        <img src="<?php echo $img; ?>marketingsafari-slider-1-6.webp" alt="Gallery 6" width="400" height="280">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
