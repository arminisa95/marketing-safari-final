<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/marketingsafari-logo-weiß.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="main-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'link_before' => '',
                    'link_after' => '',
                ]);
                ?>
            </nav>
            
            <!-- CTA Button -->
            <a href="#kontakt" class="nav-cta">
                Kostenloses Erstgespräch
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            
        </div>
    </div>
</header>

<main id="primary" class="site-main">
