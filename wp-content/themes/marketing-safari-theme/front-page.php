<?php
/**
 * Front Page Template – plain WordPress, no Elementor
 */
$img = esc_url( get_template_directory_uri() ) . '/images/';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'front-page-custom' ); ?>>

<!-- NAV -->
<nav class="nav">
  <a href="<?php echo home_url( '/' ); ?>" class="nav-logo">
    <img src="<?php echo $img; ?>marketingsafari-logo-wei%C3%9F.svg" alt="Marketing Safari" height="44">
  </a>
  <ul class="nav-links">
    <li><a href="#coachings">Unsere Coachings</a></li>
    <li><a href="#process">So funktioniert's</a></li>
    <li><a href="#contact" class="nav-cta">Anfrage senden</a></li>
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <img class="hero-bg" src="<?php echo $img; ?>marketingsafari-hero-bild.webp" alt="">
  <span class="hero-sidebar-label">by plappermaul</span>
  <div class="hero-content">
    <div>
      <h1 class="hero-headline">Einfach selbst&shy;st&auml;ndig<br>durch den<br><em>Marketing Dschungel</em><br>navigieren</h1>
    </div>
    <div>
      <p class="hero-text">Marketing Safari ist ein Coaching Programm f&uuml;r Unternehmen und Marken die sichtbar werden, Reichweite aufbauen und konstant Kunden gewinnen wollen &ndash; ohne Agenturabh&auml;ngigkeit.</p>
      <a href="#coachings" class="hero-badge">
        <img src="<?php echo $img; ?>marketingsafari-pfeil-icon-orange.svg" width="20" alt="&darr;">
      </a>
    </div>
  </div>
</section>

<!-- INTRO -->
<section class="intro-section">
  <p>Marketing Safari ist nicht einfach eine Agentur &ndash; es ist ein strukturiertes Coaching-Programm, das dich bef&auml;higt, dein Marketing selbst in die Hand zu nehmen. Mit klaren Strategien, echtem Know-how und pers&ouml;nlicher Begleitung.</p>
  <div class="intro-features">
    <div class="intro-feature">
      <div class="intro-feature-icon"><img src="<?php echo $img; ?>marketingsafari-icon-gruen.svg" width="36" alt=""></div>
      <div class="intro-feature-title">Strategie &amp; Positionierung<span>Dein klarer Fahrplan</span></div>
    </div>
    <div class="intro-feature">
      <div class="intro-feature-icon"><img src="<?php echo $img; ?>marketingsafari-icon-orange.svg" width="36" alt=""></div>
      <div class="intro-feature-title">Content &amp; Sichtbarkeit<span>Reichweite aufbauen</span></div>
    </div>
    <div class="intro-feature">
      <div class="intro-feature-icon"><img src="<?php echo $img; ?>marketingsafari-icon-lila.svg" width="36" alt=""></div>
      <div class="intro-feature-title">Kunden gewinnen<span>Ohne Agenturabh&auml;ngigkeit</span></div>
    </div>
  </div>
</section>

<!-- BANNER STRIP -->
<div class="banner-strip">
  <p>&bdquo;Make it simple, but significant.&ldquo;</p>
</div>

<!-- ZWEI SAFARIS -->
<section class="zwei-section" id="coachings">
  <div class="zwei-header">
    <h2>Zwei <em>Safaris</em> &ndash; ein Ziel</h2>
    <div class="zwei-subtitle">UNSERE COACHINGS</div>
    <p class="zwei-intro">Wir bieten zwei ma&szlig;geschneiderte Programme, die dir helfen, deinen eigenen Weg durch den Marketing-Dschungel zu navigieren &ndash; strukturiert, pers&ouml;nlich und mit echtem Impact.</p>
  </div>
  <div class="safari-cards">
    <div class="safari-card">
      <div class="safari-card-header">
        <div class="safari-card-icon orange">
          <img src="<?php echo $img; ?>marketingsafari-icon-onlinemarketingsafari.svg" width="22" alt="">
        </div>
        <div class="safari-card-title"><em>Online Marketing</em> Safari</div>
      </div>
      <div class="safari-card-duration">6 Monate &middot; Vollst&auml;ndiges Coaching-Programm</div>
      <p class="safari-card-desc">Das intensive 6-Monats-Programm f&uuml;r alle, die ihr Online-Marketing professionalisieren und messbare Ergebnisse erzielen wollen &ndash; von der Strategie bis zur Umsetzung.</p>
      <div class="safari-card-price">Ab CHF 4&rsquo;800 / 6 Monate</div>
      <div class="safari-card-actions">
        <button class="btn-outline">Mehr erfahren</button>
        <button class="btn-solid">Anfrage senden</button>
      </div>
    </div>
    <div class="safari-card">
      <div class="safari-card-header">
        <div class="safari-card-icon green">
          <img src="<?php echo $img; ?>marketingsafari-icon-contentcreationsafari.svg" width="22" alt="">
        </div>
        <div class="safari-card-title green-title"><em>Content Creation</em> Safari</div>
      </div>
      <div class="safari-card-duration">3 Monate &middot; Intensiv-Programm</div>
      <p class="safari-card-desc">Das 3-Monats-Intensivprogramm f&uuml;r alle, die ihren Content professionalisieren und eine starke visuelle Markenidentit&auml;t aufbauen wollen.</p>
      <div class="safari-card-price">Ab CHF 2&rsquo;400 / 3 Monate</div>
      <div class="safari-card-actions">
        <button class="btn-outline">Mehr erfahren</button>
        <button class="btn-solid">Anfrage senden</button>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process-section" id="process">
  <div class="process-inner">
    <h2>So l&auml;uft's <em>ab</em></h2>
    <div class="process-subtitle">SO FUNKTIONIERT'S</div>
    <p class="process-note">In 5 Schritten zu deinem professionellen Marketing &ndash; klar strukturiert, pers&ouml;nlich begleitet und auf deine Ziele ausgerichtet.</p>
    <div class="process-steps">
      <div class="process-step step-1">
        <div class="step-left">
          <img src="<?php echo $img; ?>marketingsafari-icon-nummer-1.svg" width="32" alt="1">
          <span class="step-title">Kennenlernen &amp; Analyse</span>
        </div>
        <span class="step-arrow">&rarr;</span>
      </div>
      <div class="process-step step-2">
        <div class="step-left">
          <img src="<?php echo $img; ?>marketingsafari-icon-nummer-2.svg" width="32" alt="2">
          <span class="step-title">Strategie entwickeln</span>
        </div>
        <span class="step-arrow">&rarr;</span>
      </div>
      <div class="process-step step-3">
        <div class="step-left">
          <img src="<?php echo $img; ?>marketingsafari-icon-nummer-3.svg" width="32" alt="3">
          <span class="step-title">Umsetzung &amp; Content</span>
        </div>
        <span class="step-arrow">&rarr;</span>
      </div>
      <div class="process-step step-4">
        <div class="step-left">
          <img src="<?php echo $img; ?>marketingsafari-icon-nummer-4.svg" width="32" alt="4">
          <span class="step-title">Optimierung &amp; Wachstum</span>
        </div>
        <span class="step-arrow">&rarr;</span>
      </div>
      <div class="process-step step-5">
        <div class="step-left">
          <img src="<?php echo $img; ?>marketingsafari-icon-nummer-5.svg" width="32" alt="5">
          <span class="step-title">Erfolgsmessung &amp; Weiterentwicklung</span>
        </div>
        <span class="step-arrow">&rarr;</span>
      </div>
    </div>
  </div>
</section>

<!-- REFERENZEN -->
<section class="referenzen-section">
  <h2>Einblicke &amp; <em>Referenzen</em></h2>
  <p class="referenzen-intro">Echte Projekte, echte Ergebnisse. Hier sind einige Einblicke in unsere Arbeit und die Zusammenarbeit mit unseren Kunden.</p>
  <div class="referenzen-grid">
    <div class="ref-card-large">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-1.webp" alt="Referenz">
      <div class="ref-card-large-label">REFERENZ</div>
      <div class="ref-card-large-title">Social Media Kampagne</div>
    </div>
    <div class="ref-card">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-2.webp" alt="">
      <div class="ref-card-label">CONTENT</div>
      <div class="ref-card-title">Content Creation</div>
    </div>
    <div class="ref-card">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-3.webp" alt="">
      <div class="ref-card-label">STRATEGIE</div>
      <div class="ref-card-title">Marketing Strategie</div>
    </div>
    <div class="ref-card">
      <img src="<?php echo $img; ?>marketingsafari-slider-1-4.webp" alt="">
      <div class="ref-card-label">BRANDING</div>
      <div class="ref-card-title">Brand Identity</div>
    </div>
    <div class="ref-card">
      <img src="<?php echo $img; ?>marketingsafari-meeting.webp" alt="">
      <div class="ref-card-label">COACHING</div>
      <div class="ref-card-title">1:1 Beratung</div>
    </div>
  </div>
</section>

<!-- ONLINE MARKETING SAFARI -->
<section class="oms-section" id="contact">
  <div class="oms-inner">
    <div class="oms-header">
      <div class="oms-badge">
        <img src="<?php echo $img; ?>marketingsafari-icon-onlinemarketingsafari.svg" width="24" alt="">
      </div>
      <h2 class="oms-title"><em>Online Marketing</em> Safari</h2>
    </div>
    <div class="oms-subtitle">6 Monate &middot; Vollst&auml;ndiges Coaching-Programm</div>
    <p class="oms-desc">Das Online Marketing Safari Programm begleitet dich &uuml;ber 6 Monate dabei, dein Marketing komplett aufzubauen und zu professionalisieren. Von der Strategie bis zur Umsetzung &ndash; wir sind an deiner Seite.</p>
    <div class="oms-features">
      <div class="oms-feature-col">
        <div class="oms-feature-item">Positionierung &amp; Zielgruppenanalyse</div>
        <div class="oms-feature-item">Content Strategie entwickeln</div>
        <div class="oms-feature-item">Social Media Aufbau</div>
      </div>
      <div class="oms-feature-col">
        <div class="oms-feature-item">Website &amp; SEO Optimierung</div>
        <div class="oms-feature-item">E-Mail Marketing aufbauen</div>
        <div class="oms-feature-item">Paid Advertising</div>
      </div>
      <div class="oms-feature-col">
        <div class="oms-feature-item">Analytics &amp; Reporting</div>
        <div class="oms-feature-item">Pers&ouml;nliches Coaching</div>
        <div class="oms-feature-item">Community &amp; Austausch</div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-logo">
    <img src="<?php echo $img; ?>marketingsafari-logo-wei%C3%9F.svg" alt="Marketing Safari" height="40">
  </div>
  <p class="footer-text">&copy; <?php echo date( 'Y' ); ?> Marketing Safari &middot; Alle Rechte vorbehalten</p>
  <ul class="footer-links">
    <li><a href="/impressum">Impressum</a></li>
    <li><a href="/datenschutz">Datenschutz</a></li>
    <li><a href="/kontakt">Kontakt</a></li>
  </ul>
</footer>

<?php wp_footer(); ?>
</body>
</html>
