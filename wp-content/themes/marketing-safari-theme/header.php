<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-logo-weiß.svg" alt="Marketing Safari" width="169" height="55">
  </a>

  <nav class="main-nav" id="main-nav">
    <ul>
      <li><a href="#leistungen">Leistungen</a></li>
      <li><a href="#safari">So läuft's ab</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
      <li><a href="#ueber-mich">Über mich</a></li>
    </ul>
  </nav>

  <a href="#kontakt" class="nav-cta">
    Kostenloses Erstgespräch
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </a>

  <button class="mobile-toggle" id="mobile-toggle" aria-label="Menü">
    <span></span><span></span><span></span>
  </button>
</header>
