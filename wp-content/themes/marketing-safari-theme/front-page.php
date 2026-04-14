<?php
/**
 * The front page template file
 */

get_header();
?>

<!-- ====================
     HERO SECTION
     ==================== -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            
            <!-- Content -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    <span>Wir sind bereit für Ihr Projekt</span>
                </div>
                
                <h1 class="hero-title">
                    Marketing, das <span class="hero-title-accent">seinen Weg</span> kennt
                </h1>
                
                <p class="hero-subtitle">
                    Wir jagen keine Likes. Wir gewinnen Kunden. Mit Strategien, die funktionieren – für Ihr nachhaltiges Wachstum.
                </p>
                
                <div class="hero-buttons">
                    <a href="#kontakt" class="btn-primary">
                        Kostenloses Erstgespräch
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="#leistungen" class="btn-secondary">
                        Unsere Leistungen
                    </a>
                </div>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-number">150+</span>
                        <span class="hero-stat-label">Projekte</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-number">98%</span>
                        <span class="hero-stat-label">Zufriedenheit</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-number">10+</span>
                        <span class="hero-stat-label">Jahre Erfahrung</span>
                    </div>
                </div>
            </div>
            
            <!-- Image -->
            <div class="hero-image-wrapper">
                <div class="hero-deco-1"></div>
                <div class="hero-deco-2"></div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-hero-bild.webp" alt="Marketing Safari Team bei der Arbeit">
                </div>
                <div class="hero-floating-card">
                    <div class="hero-floating-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg>
                    </div>
                    <div>
                        <div class="hero-floating-text">Durchschnittliche Steigerung</div>
                        <div class="hero-floating-value">+340% ROI</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- ====================
     SERVICES SECTION
     ==================== -->
<section class="services" id="leistungen">
    <div class="container">
        
        <div class="section-header">
            <span class="section-subtitle">Unsere Leistungen</span>
            <h2 class="section-title">Strategien, die <span class="section-title-accent">wirken</span></h2>
            <p class="section-description">Von Content Creation bis SEO – wir begleiten Sie auf Ihrer Safari zum Erfolg</p>
        </div>
        
        <div class="services-grid">
            
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-icon-onlinemarketingsafari.svg" alt="Online Marketing">
                </div>
                <h3 class="service-title">Online Marketing Safari</h3>
                <p class="service-description">Zielgerichtete Kampagnen über alle Kanäle. Wir finden Ihre Zielgruppe und konvertieren sie zu Kunden.</p>
                <a href="#" class="service-link">
                    Mehr erfahren
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-icon-contentcreationsafari.svg" alt="Content Creation">
                </div>
                <h3 class="service-title">Content Creation Safari</h3>
                <p class="service-description">Content, der begeistert. Wir kreieren Texte, Bilder und Videos, die Ihre Marke zum Leben erwecken.</p>
                <a href="#" class="service-link">
                    Mehr erfahren
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-icon-lila.svg" alt="Social Media">
                </div>
                <h3 class="service-title">Social Media Safari</h3>
                <p class="service-description">Authentische Community-Arbeit. Wir bauen Ihre Präsenz auf und pflegen echte Beziehungen.</p>
                <a href="#" class="service-link">
                    Mehr erfahren
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- ====================
     PROCESS SECTION
     ==================== -->
<section class="process">
    <div class="container">
        <div class="process-grid">
            
            <!-- Left Content -->
            <div class="process-content">
                <span class="section-subtitle">Unser Prozess</span>
                <h2 class="section-title">So funktioniert Ihre <span style="color: var(--color-orange);">Safari</span> zum Erfolg</h2>
                <p class="section-description">In 5 Schritten zu messbarem Erfolg. Transparent, effizient und auf Ihre Ziele zugeschnitten.</p>
                <a href="#kontakt" class="btn-primary">Jetzt starten</a>
            </div>
            
            <!-- Right Steps -->
            <div class="process-steps">
                
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Kostenloses Erstgespräch</h3>
                        <p>Wir lernen Sie kennen und verstehen Ihre Ziele</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Analyse & Strategie</h3>
                        <p>Wir analysieren Ihre aktuelle Lage und entwickeln einen Plan</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Konzeption & Umsetzung</h3>
                        <p>Wir erstellen maßgeschneiderte Lösungen für Sie</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Launch & Optimierung</h3>
                        <p>Wir bringen Ihre Kampagnen live und optimieren laufend</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Reporting & Weiterentwicklung</h3>
                        <p>Transparente Reports und kontinuierliche Verbesserung</p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<!-- ====================
     CONTACT SECTION
     ==================== -->
<section class="contact" id="kontakt">
    <div class="container">
        <h2 class="section-title">Bereit für Ihre Marketing Safari?</h2>
        <p class="section-description">Lassen Sie uns gemeinsam Ihre Ziele erreichen. Das erste Gespräch ist kostenlos und unverbindlich.</p>
        
        <div class="contact-buttons">
            <a href="mailto:hello@marketingsafari.at" class="btn-dark">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                E-Mail schreiben
            </a>
            <a href="tel:+43123456789" class="btn-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                Anrufen
            </a>
        </div>
    </div>
</section>

<!-- ====================
     GALLERY SECTION
     ==================== -->
<section class="gallery">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Impressionen</span>
            <h2 class="section-title">Einblicke in unsere <span class="section-title-accent">Arbeit</span></h2>
        </div>
        
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-meeting.webp" alt="Team Meeting">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-meeting.webp" alt="Büro">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-meeting.webp" alt="Workshop">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-meeting.webp" alt="Kunden">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-meeting.webp" alt="Event">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-meeting.webp" alt="Team">
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
