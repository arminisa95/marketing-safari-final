<?php get_header(); ?>
<?php $img = get_template_directory_uri() . '/images/'; ?>

<!-- ══════════════════════════════════════════
     HERO — 1920×1080 Figma pixel-accurate
     ══════════════════════════════════════════ -->
<section class="hero-section" id="hero">

  <!-- Green bar: 48.59px / 1920 = 2.53% -->
  <div class="hero-green-bar">
    <span class="hero-green-bar-text">by <a href="https://www.plappermaul.at/?utm_source=google&utm_medium=cpc&utm_campaign=brand_search&gad_source=1&gad_campaignid=21494778458&gclid=Cj0KCQjwy_fOBhC6ARIsAHKFB7_3-12_r_5oa1bHinor3JTdARfvczcN244YVUSlVAqK1LnrdnsL1QwaAqeKEALw_wcB" target="_blank" rel="noopener" class="plappermaul-link">plappermaul</a></span>
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
          <img src="<?php echo $img; ?>marketingsafari-icon-onlinemarketingsafari.svg" alt="" class="safari-card-icon">
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
          <img src="<?php echo $img; ?>marketingsafari-icon-contentcreationsafari.svg" alt="" class="safari-card-icon">
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
    <p class="process-subheading">Geführt, strukturiert &amp; auf Augenhöhe – mit ein paar wilden<br>Überraschungen und jeder Menge Inspiration.</p>
    <p class="process-intro">Marketing ist keine einmalige Aktion, sondern eine Reise. Eine Reise, die Klarheit schafft, den Blick schärft und<br>zeigt, welcher Weg wirklich zu deinem Unternehmen passt. Auf der Marketing Safari bist du nicht allein<br>unterwegs: Du wirst begleitet, gefordert und unterstützt – Schritt für Schritt, Station für Station.</p>
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
    <h2 class="process-heading">Referenzen<br>aus der <em>Praxis</em></h2>
    <p class="referenzen-lead">Die Projekte, die wir hier zeigen, haben wir in den vergangenen Jahren als Agentur Plappermaul<br>umgesetzt und begleitet. Sie stehen für echte Herausforderungen, echte Unternehmen und messbare<br>Ergebnisse – nicht für Theorie oder Testcases.</p>
    <p class="referenzen-body">Da die Nachfrage nach unserem Know-how stetig wächst, haben wir uns entschieden, dieses Wissen nicht mehr nur punktuell als Agenturleistung anzubieten. Mit Marketing Safari machen wir unsere Erfahrung erstmals in einem strukturierten Coaching-Programm für eine breitere Zielgruppe zugänglich. Damit du von dem profitierst, was sich in der Praxis hundertfach bewährt hat.</p>
    <img src="<?php echo $img; ?>referenzen-rectangle.png" alt="Referenzen aus der Praxis" class="referenzen-img">
    <p class="referenzen-caption">Online Marketing<br>Pelviqueens</p>
    <img src="<?php echo $img; ?>referenzen-group9.png" alt="Content Creation Referenzen" class="referenzen-group9">
    <div class="referenzen-group9-captions">
      <div class="referenzen-group9-caption">
        <p>Content Creation</p>
        <p>Stadtgemeinde Bad Hall</p>
      </div>
      <div class="referenzen-group9-caption">
        <p>Content Creation</p>
        <p>Modehaus Kutsam</p>
      </div>
      <div class="referenzen-group9-caption">
        <p>Content Creation</p>
        <p>Tourismusverband Attersee-Attergau</p>
      </div>
    </div>
  </div>

</section>

<!-- ══════════════════════════════════════════
     ONLINE MARKETING SAFARI SECTION
     ══════════════════════════════════════════ -->
<section class="sds-section" id="online-marketing-safari">
  <div class="sds-inner">

    <div class="sds-title-row">
      <img src="<?php echo $img; ?>marketingsafari-icon-onlinemarketingsafari.svg" alt="" class="sds-badge">
      <div class="sds-title-block">
        <h2 class="sds-heading">Online Marketing <em>Safari</em></h2>
        <p class="sds-subtitle">Der strukturierte Weg zu Reichweite, Leads und planbaren Kunden</p>
      </div>
    </div>

    <p class="sds-body">Online Marketing fühlt sich oft an wie ein undurchdringlicher Dschungel: zu viele Kanäle, zu viele Tools, zu wenig Überblick. In der Online Marketing Safari bringen wir Ordnung in dieses Chaos und zeigen dir, wie Marketing wirklich funktioniert. Du lernst, welche Maßnahmen für dein Unternehmen Sinn machen – und welche du getrost ignorieren kannst. Statt kurzfristiger Aktionen bekommst du ein klares System, das zu deinem Alltag passt. Wir arbeiten praxisnah, ehrlich und ohne Marketing-Buzzwords. Du setzt direkt um, sammelst echte Erfahrungen und siehst, was Wirkung zeigt. Am Ende der Safari weißt du nicht nur was zu tun ist, sondern auch warum. Und genau das macht den Unterschied zwischen Marketing-Aktionismus und nachhaltigem Wachstum.</p>

    <div class="sds-features">
      <div class="sds-features-row">
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" class="sds-check">
          <span>Klarer Online-Marketing-Fahrplan statt Einzelmaßnahmen</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" class="sds-check">
          <span>Praxiswissen aus über 14 Jahren Agenturerfahrung</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" class="sds-check">
          <span>Tools, Workflows &amp; KI-Prompts, die Zeit sparen</span>
        </div>
      </div>
      <div class="sds-features-row">
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" class="sds-check">
          <span>Fokus auf Reichweite, Leads &amp; Kunden – nicht auf Spielereien</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" class="sds-check">
          <span>Umsetzung während des Coachings, nicht erst danach</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-orange.svg" alt="" class="sds-check">
          <span>3 x Live-Event und 3 x Online-Call inklusive</span>
        </div>
      </div>
    </div>

    <p class="sds-meta">Max. 20 Teilnehmer | 4 Monate | € 4.000 | Start mehrmals pro Jahr</p>

    <div class="sds-form-box sds-form-orange" id="kontakt">
      <h3 class="sds-form-heading">Danach erhältst du einen Link um dir ein kostenloses Info-Gespräch zu vereinbaren.</h3>
      <form class="sds-form" action="#" method="post">
        <div class="sds-form-grid">
          <div class="sds-field">
            <label>Vorname*</label>
            <input type="text" name="vorname" placeholder="Max" required>
          </div>
          <div class="sds-field">
            <label>Nachname*</label>
            <input type="text" name="nachname" placeholder="Mustermann" required>
          </div>
          <div class="sds-field">
            <label>Unternehmen*</label>
            <input type="text" name="unternehmen" placeholder="Musterunternehmen" required>
          </div>
          <div class="sds-field">
            <label>E-Mail*</label>
            <input type="email" name="email" placeholder="max@unternehmen.at" required>
          </div>
          <div class="sds-field">
            <label>Telefon*</label>
            <input type="tel" name="telefon" placeholder="+43 664 123 456 789" required>
          </div>
          <div class="sds-field">
            <label>Geplantes monatliches Werbebudget</label>
            <input type="text" name="budget" placeholder="30.000 €">
          </div>
        </div>
        <div class="sds-field sds-field-full">
          <label>Erzähle uns mehr von dir, deiner Idee oder deinem Unternehmen</label>
          <textarea name="message" placeholder="Erzähl uns etwas über dich und dein Projekt ..."></textarea>
        </div>
        <div class="sds-checkbox-row">
          <input type="checkbox" id="privacy-oms" name="privacy" required>
          <label for="privacy-oms">Ich habe die Datenschutzerklärung gelesen und stimme dieser zu.</label>
        </div>
        <button type="submit" class="sds-submit">Anfrage absenden</button>
      </form>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     CONTENT CREATION SAFARI SECTION
     ══════════════════════════════════════════ -->
<section class="sds-section" id="content-creation-safari">
  <div class="sds-inner">

    <div class="sds-title-row">
      <img src="<?php echo $img; ?>marketingsafari-icon-contentcreationsafari.svg" alt="" class="sds-badge">
      <div class="sds-title-block">
        <h2 class="sds-heading">Content Creation <em>Safari</em></h2>
        <p class="sds-subtitle">Lerne Content zu erstellen, der sichtbar macht, Vertrauen aufbaut und verkauft.</p>
      </div>
    </div>

    <p class="sds-body">Guter Content entsteht nicht durch Zufall, sondern durch Klarheit und Struktur. In der Content Creation Safari zeigen wir dir, wie du Inhalte entwickelst, die zu deiner Marke passen und bei deiner Zielgruppe ankommen. Du lernst, wie du Ideen findest, Inhalte planst und Content produzierst, ohne ständig unter Druck zu stehen. Wir räumen mit dem Mythos auf, dass man jedem Trend nachjagen muss, um erfolgreich zu sein. Stattdessen arbeitest du mit klaren Formaten, smarten Workflows und gezieltem Einsatz von KI. Du wirst schneller, sicherer und deutlich wirksamer in deiner Kommunikation. Am Ende hast du nicht nur besseren Content – sondern ein Social Media Game, das du kontrollierst.</p>

    <div class="sds-features">
      <div class="sds-features-row">
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" class="sds-check">
          <span>Klarer Content-Plan statt Ideenchaos</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" class="sds-check">
          <span>Effiziente Workflows für Social Media &amp; Online-Kanäle</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" class="sds-check">
          <span>Praxisnahe Umsetzung mit direktem Feedback</span>
        </div>
      </div>
      <div class="sds-features-row">
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" class="sds-check">
          <span>Content-Formate, die sichtbar machen und Vertrauen schaffen</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" class="sds-check">
          <span>KI-Prompt-Vorlagen für schnelle Planung der Content-Erstellung</span>
        </div>
        <div class="sds-feature">
          <img src="<?php echo $img; ?>marketingsafari-aufzaehlungsicon-gruen.svg" alt="" class="sds-check">
          <span>Inkl. Guidelines für die Contenterstellung mit dem Smartphone, Praxisanwendungen und Equipmentempfehlungen</span>
        </div>
      </div>
    </div>

    <p class="sds-meta">Max. 20 Teilnehmer | 4 Monate | € 4.000 | Start mehrmals pro Jahr</p>

    <div class="sds-form-box sds-form-green">
      <h3 class="sds-form-heading">Danach erhältst du einen Link um dir ein kostenloses Info-Gespräch zu vereinbaren.</h3>
      <form class="sds-form" action="#" method="post">
        <div class="sds-form-grid">
          <div class="sds-field">
            <label>Vorname*</label>
            <input type="text" name="vorname" placeholder="Max" required>
          </div>
          <div class="sds-field">
            <label>Nachname*</label>
            <input type="text" name="nachname" placeholder="Mustermann" required>
          </div>
          <div class="sds-field">
            <label>Unternehmen*</label>
            <input type="text" name="unternehmen" placeholder="Musterunternehmen" required>
          </div>
          <div class="sds-field">
            <label>E-Mail*</label>
            <input type="email" name="email" placeholder="max@unternehmen.at" required>
          </div>
          <div class="sds-field">
            <label>Telefon*</label>
            <input type="tel" name="telefon" placeholder="+43 664 123 456 789" required>
          </div>
          <div class="sds-field">
            <label>Geplantes monatliches Werbebudget</label>
            <input type="text" name="budget" placeholder="30.000 €">
          </div>
        </div>
        <div class="sds-field sds-field-full">
          <label>Erzähle uns mehr von dir, deiner Idee oder deinem Unternehmen</label>
          <textarea name="message" placeholder="Erzähl uns etwas über dich und dein Projekt ..."></textarea>
        </div>
        <div class="sds-checkbox-row">
          <input type="checkbox" id="privacy-ccs" name="privacy" required>
          <label for="privacy-ccs">Ich habe die Datenschutzerklärung gelesen und stimme dieser zu.</label>
        </div>
        <button type="submit" class="sds-submit">Anfrage absenden</button>
      </form>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     WARUM ES MARKETING SAFARI GIBT SECTION
     Figma canvas 1920px · top 11275.77px
     ══════════════════════════════════════════ -->
<section class="warum-section">
  <div class="warum-content">

    <div class="warum-heading-row">
      <h2 class="warum-heading">Warum es<br><em>Marketing Safari</em> gibt</h2>
      <img src="<?php echo $img; ?>marketingsafari-icon-papagei-gruen.svg" alt="" class="warum-parrot">
    </div>

    <p class="warum-body">Wir lieben Agenturarbeit. Seit über 14 Jahren gestalten wir bei Plappermaul Marken, Kampagnen und digitale Strategien für über 400 Kunden. Wir tauchen tief ein, denken mit und setzen um. Aber wir wissen auch: Es gibt Phasen, in denen es strategisch sinnvoller ist, Marketing selbst im Unternehmen aufzubauen.</p>

    <p class="warum-sub">Zum Beispiel, wenn …</p>

    <div class="warum-cols">
      <div class="warum-col">
        <p>du neu gegründet hast und dein Marketing selbst verstehen und steuern möchtest</p>
      </div>
      <div class="warum-col">
        <p>du eine interne Marketingstelle oder Abteilung aufbauen willst</p>
      </div>
      <div class="warum-col">
        <p>Content Creation &amp; Online Marketing langfristig im Unternehmen verankert sein sollen</p>
      </div>
      <div class="warum-col">
        <p>dein Geschäftsmodell so speziell ist, dass internes Know-how entscheidend ist</p>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     AUSBILDUNG SECTION
     Figma canvas 1920×1080px · top 12140.99px
     ══════════════════════════════════════════ -->
<section class="ausbildung-section" style="background-image: url('<?php echo $img; ?>marketingsafari-meeting.webp')">

  <h1 class="ausbildung-heading"><em>Ausbildung</em> ist für uns nichts neues</h1>

  <div class="ausbildung-cols">

    <div class="ausbildung-col">
      <img src="<?php echo $img; ?>marketingsafari-icon-orange.svg" alt="" class="ausbildung-icon">
      <p class="ausbildung-col-text">Armin &amp; Markus unterrichten seit über 7 Jahren an der FH OÖ Campus Steyr</p>
    </div>

    <div class="ausbildung-sep" aria-hidden="true"></div>

    <div class="ausbildung-col">
      <img src="<?php echo $img; ?>marketingsafari-icon-lila.svg" alt="" class="ausbildung-icon">
      <p class="ausbildung-col-text">Schwerpunkte: Digitales Marketing &amp; Social Media Marketing</p>
    </div>

    <div class="ausbildung-sep" aria-hidden="true"></div>

    <div class="ausbildung-col">
      <img src="<?php echo $img; ?>marketingsafari-icon-gruen.svg" alt="" class="ausbildung-icon">
      <p class="ausbildung-col-text">kontinuierliche Weiterbildung im eigenen Team</p>
    </div>

  </div>

</section>

<!-- ══════════════════════════════════════════
     UNSER ANSPRUCH SECTION
     Figma canvas 1920px · top 13455.38px
     ══════════════════════════════════════════ -->
<section class="anspruch-section">
  <div class="anspruch-content">
    <h2 class="anspruch-heading">Unser <em>Anspruch</em></h2>
    <p class="anspruch-body">Marketing Safari ist kein Ersatz für Agenturarbeit.<br>Es ist die richtige Lösung für Unternehmer, die ihren eigenen Weg im Marketing bewusst selbst gehen wollen.</p>
  </div>
  <div class="anspruch-stripes">
    <div class="anspruch-stripe anspruch-yellow">
      <span>keine schnellen Online-Kurse ohne Substanz</span>
    </div>
    <div class="anspruch-stripe anspruch-green">
      <span>keine Videos zum Durchklicken</span>
    </div>
    <div class="anspruch-stripe anspruch-orange">
      <span>echte Live-Erfahrung, Austausch und Umsetzung</span>
    </div>
    <div class="anspruch-stripe anspruch-cyan">
      <span>Begleitung auf Augenhöhe</span>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     3-PHOTO GALLERY
     Figma canvas 1920px · after Unser Anspruch
     ══════════════════════════════════════════ -->
<section class="gallery3-section">
  <div class="gallery3-grid">
    <img src="<?php echo $img; ?>marketingsafari-slider-1-1.webp" alt="">
    <img src="<?php echo $img; ?>marketingsafari-slider-1-2.webp" alt="">
    <img src="<?php echo $img; ?>marketingsafari-slider-1-3.webp" alt="">
  </div>
</section>

<!-- ══════════════════════════════════════════
     GALLERY NAV — two orange arrow buttons
     Figma: Group 11 (left) + Group 12 (right)
     White area between photos and yellow banner
     ══════════════════════════════════════════ -->
<div class="gallery-nav">
  <img src="<?php echo $img; ?>group11-arrow-left.svg" alt="" class="gallery-nav-arrow" aria-hidden="true">
  <img src="<?php echo $img; ?>group12-arrow-right.svg" alt="" class="gallery-nav-arrow" aria-hidden="true">
</div>

<!-- ══════════════════════════════════════════
     BOTTOM YELLOW WAVE BANNER (Group 10.png)
     ══════════════════════════════════════════ -->
<div class="yellow-wave-banner">
  <img src="<?php echo $img; ?>group10-yellow-banner.png" alt="Mit Marketing Safari - nie den Überblick zwischen Content-Ideen, Anzeigen und Tools verlieren.">
</div>

<?php get_footer(); ?>
