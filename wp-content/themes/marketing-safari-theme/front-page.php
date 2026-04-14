<?php
/**
 * The front page template file
 *
 * @package Marketing_Safari
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- ====================
         HERO SECTION
         ==================== -->
    <section class="hero-section relative min-h-screen flex items-center overflow-hidden bg-[#1a1a1a]">
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <circle cx="1" cy="1" r="0.5" fill="white"/>
                </pattern>
                <rect width="100" height="100" fill="url(#grid)"/>
            </svg>
        </div>
        
        <div class="container mx-auto px-6 lg:px-12 relative z-10 pt-32 pb-20 lg:pt-40 lg:pb-32">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                
                <!-- Left: Content -->
                <div class="text-white max-w-xl">
                    
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-[#A8D67E] rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium">Wir sind bereit für Ihr Projekt</span>
                    </div>
                    
                    <!-- Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Marketing, das 
                        <span class="text-[#A8D67E]">seinen Weg</span> 
                        kennt
                    </h1>
                    
                    <!-- Subheadline -->
                    <p class="text-lg md:text-xl text-gray-300 leading-relaxed mb-8">
                        Wir jagen keine Likes. Wir gewinnen Kunden. 
                        Mit Strategien, die funktionieren – für Ihr nachhaltiges Wachstum.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#kontakt" class="inline-flex items-center justify-center gap-2 bg-[#A8D67E] text-[#1a1a1a] px-8 py-4 rounded-full font-semibold text-base hover:bg-[#8BC46A] transition-all duration-200 shadow-lg shadow-[#A8D67E]/30">
                            <span>Kostenloses Erstgespräch</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#leistungen" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white px-8 py-4 rounded-full font-semibold text-base hover:bg-white/10 transition-all duration-200">
                            <span>Unsere Leistungen</span>
                        </a>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="flex items-center gap-8 mt-12 pt-8 border-t border-white/10">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A8D67E]">150+</div>
                            <div class="text-sm text-gray-400">Projekte</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A8D67E]">98%</div>
                            <div class="text-sm text-gray-400">Zufriedenheit</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A8D67E]">10+</div>
                            <div class="text-sm text-gray-400">Jahre Erfahrung</div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Right: Hero Image -->
                <div class="relative lg:pl-8">
                    <div class="relative">
                        <!-- Main Image -->
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/marketingsafari-hero-bild.webp" 
                            alt="Marketing Safari Team" 
                            class="rounded-3xl shadow-2xl w-full object-cover aspect-[4/3]"
                            loading="eager"
                        >
                        
                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-[#F5A962] rounded-2xl -z-10"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-[#9B8AC7] rounded-2xl -z-10"></div>
                        
                        <!-- Floating Card -->
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-xl max-w-xs">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-[#A8D67E] rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#1a1a1a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500">Durchschnittliche Steigerung</div>
                                    <div class="text-xl font-bold text-[#1a1a1a]">+340% ROI</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/50 animate-bounce">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
        
    </section>

    <!-- ====================
         SERVICES SECTION
         ==================== -->
    <section id="leistungen" class="py-20 lg:py-32 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block text-[#A8D67E] font-semibold text-sm uppercase tracking-wider mb-4">Unsere Leistungen</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#1a1a1a] mb-6">
                    Strategien, die <span class="text-[#F5A962]">wirken</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Von Content Creation bis SEO – wir begleiten Sie auf Ihrer Safari zum Erfolg
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Service 1: Online Marketing -->
                <div class="group bg-gray-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-[#A8D67E] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/marketingsafari-icon-onlinemarketingsafari.svg" 
                            alt="Online Marketing" 
                            class="w-10 h-10"
                        >
                    </div>
                    <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Online Marketing Safari</h3>
                    <p class="text-gray-600 mb-6">
                        Zielgerichtete Kampagnen über alle Kanäle. Wir finden Ihre Zielgruppe und konvertieren sie zu Kunden.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#A8D67E] font-semibold hover:gap-3 transition-all">
                        <span>Mehr erfahren</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Service 2: Content Creation -->
                <div class="group bg-gray-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-[#F5A962] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/marketingsafari-icon-contentcreationsafari.svg" 
                            alt="Content Creation" 
                            class="w-10 h-10"
                        >
                    </div>
                    <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Content Creation Safari</h3>
                    <p class="text-gray-600 mb-6">
                        Content, der begeistert. Wir kreieren Texte, Bilder und Videos, die Ihre Marke zum Leben erwecken.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#F5A962] font-semibold hover:gap-3 transition-all">
                        <span>Mehr erfahren</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Service 3: Social Media -->
                <div class="group bg-gray-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-[#9B8AC7] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/marketingsafari-icon-lila.svg" 
                            alt="Social Media" 
                            class="w-10 h-10"
                        >
                    </div>
                    <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Social Media Safari</h3>
                    <p class="text-gray-600 mb-6">
                        Authentische Community-Arbeit. Wir bauen Ihre Präsenz auf und pflegen echte Beziehungen.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#9B8AC7] font-semibold hover:gap-3 transition-all">
                        <span>Mehr erfahren</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- ====================
         PROCESS SECTION
         ==================== -->
    <section class="py-20 lg:py-32 bg-[#1a1a1a] text-white">
        <div class="container mx-auto px-6 lg:px-12">
            
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Content -->
                <div>
                    <span class="inline-block text-[#A8D67E] font-semibold text-sm uppercase tracking-wider mb-4">Unser Prozess</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        So funktioniert Ihre <span class="text-[#F5A962]">Safari</span> zum Erfolg
                    </h2>
                    <p class="text-lg text-gray-400 mb-8">
                        In 5 Schritten zu messbarem Erfolg. Transparent, effizient und auf Ihre Ziele zugeschnitten.
                    </p>
                    
                    <a href="#kontakt" class="inline-flex items-center gap-2 bg-[#A8D67E] text-[#1a1a1a] px-8 py-4 rounded-full font-semibold text-base hover:bg-[#8BC46A] transition-all duration-200">
                        <span>Jetzt starten</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Right: Steps -->
                <div class="space-y-6">
                    
                    <!-- Step 1 -->
                    <div class="flex gap-4 items-start p-6 rounded-2xl bg-white/5 hover:bg-white/10 transition-colors">
                        <div class="w-12 h-12 bg-[#A8D67E] rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-[#1a1a1a] font-bold">1</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Kostenloses Erstgespräch</h3>
                            <p class="text-gray-400 text-sm">Wir lernen Sie kennen und verstehen Ihre Ziele</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="flex gap-4 items-start p-6 rounded-2xl bg-white/5 hover:bg-white/10 transition-colors">
                        <div class="w-12 h-12 bg-[#F5A962] rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-[#1a1a1a] font-bold">2</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Analyse & Strategie</h3>
                            <p class="text-gray-400 text-sm">Wir analysieren Ihre aktuelle Lage und entwickeln einen Plan</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="flex gap-4 items-start p-6 rounded-2xl bg-white/5 hover:bg-white/10 transition-colors">
                        <div class="w-12 h-12 bg-[#9B8AC7] rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-[#1a1a1a] font-bold">3</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Konzeption & Umsetzung</h3>
                            <p class="text-gray-400 text-sm">Wir erstellen maßgeschneiderte Lösungen für Sie</p>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="flex gap-4 items-start p-6 rounded-2xl bg-white/5 hover:bg-white/10 transition-colors">
                        <div class="w-12 h-12 bg-[#A8D67E] rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-[#1a1a1a] font-bold">4</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Launch & Optimierung</h3>
                            <p class="text-gray-400 text-sm">Wir bringen Ihre Kampagnen live und optimieren laufend</p>
                        </div>
                    </div>
                    
                    <!-- Step 5 -->
                    <div class="flex gap-4 items-start p-6 rounded-2xl bg-white/5 hover:bg-white/10 transition-colors">
                        <div class="w-12 h-12 bg-[#F5A962] rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-[#1a1a1a] font-bold">5</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Reporting & Weiterentwicklung</h3>
                            <p class="text-gray-400 text-sm">Transparente Reports und kontinuierliche Verbesserung</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- ====================
         CTA SECTION
         ==================== -->
    <section id="kontakt" class="py-20 lg:py-32 bg-gradient-to-br from-[#A8D67E] to-[#8BC46A]">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#1a1a1a] mb-6 max-w-4xl mx-auto">
                Bereit für Ihre Marketing Safari?
            </h2>
            <p class="text-lg md:text-xl text-[#1a1a1a]/80 mb-10 max-w-2xl mx-auto">
                Lassen Sie uns gemeinsam Ihre Ziele erreichen. Das erste Gespräch ist kostenlos und unverbindlich.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:hello@marketingsafari.at" class="inline-flex items-center justify-center gap-2 bg-[#1a1a1a] text-white px-8 py-4 rounded-full font-semibold text-base hover:bg-[#2a2a2a] transition-all duration-200 shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>E-Mail schreiben</span>
                </a>
                <a href="tel:+43123456789" class="inline-flex items-center justify-center gap-2 bg-white text-[#1a1a1a] px-8 py-4 rounded-full font-semibold text-base hover:bg-gray-100 transition-all duration-200 shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>Anrufen</span>
                </a>
            </div>
            
        </div>
    </section>

</main>

<?php
get_footer();
