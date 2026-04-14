<?php
/**
 * The header for our theme
 *
 * @package Marketing_Safari
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-poppins antialiased'); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen flex flex-col">
    
    <header class="site-header absolute top-0 left-0 right-0 z-50 py-6">
        <div class="container mx-auto px-6 lg:px-12 flex items-center justify-between">
            
            <!-- Logo -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/marketingsafari-logo-weiß.svg" 
                        alt="<?php bloginfo('name'); ?>" 
                        class="h-12 w-auto"
                        width="180"
                        height="48"
                    >
                </a>
            </div>
            
            <!-- Navigation -->
            <nav class="main-navigation hidden lg:block">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'flex items-center gap-8 text-white text-base font-medium',
                    'container'      => false,
                    'link_before'    => '<span class="hover:text-[#A8D67E] transition-colors duration-200">',
                    'link_after'     => '</span>',
                ]);
                ?>
            </nav>
            
            <!-- CTA Button -->
            <a href="#kontakt" class="hidden lg:inline-flex items-center gap-2 bg-white text-[#1a1a1a] px-6 py-3 rounded-full font-semibold text-sm hover:bg-[#A8D67E] transition-colors duration-200">
                <span>Kostenloses Erstgespräch</span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="w-4 h-4">
                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-white p-2" id="mobile-menu-toggle" aria-label="Menu">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden fixed inset-0 bg-[#1a1a1a] z-40 pt-24 px-6">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'flex flex-col gap-6 text-white text-xl font-medium',
                'container'      => false,
            ]);
            ?>
            <a href="#kontakt" class="mt-8 inline-flex items-center gap-2 bg-[#A8D67E] text-[#1a1a1a] px-6 py-4 rounded-full font-semibold text-base w-full justify-center">
                Kostenloses Erstgespräch
            </a>
        </div>
    </header>
