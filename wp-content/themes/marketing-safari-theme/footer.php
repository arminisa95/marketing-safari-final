<?php
/**
 * The template for displaying the footer
 *
 * @package Marketing_Safari
 */
?>

    <footer class="site-footer bg-[#1a1a1a] text-white py-16 lg:py-24">
        <div class="container mx-auto px-6 lg:px-12">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                
                <!-- Brand Column -->
                <div class="space-y-6">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/marketingsafari-logo-weiß.svg" 
                        alt="Marketing Safari" 
                        class="h-10 w-auto"
                        width="150"
                        height="40"
                    >
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Marketing, das seinen Weg kennt. Wir jagen keine Likes. Wir gewinnen Kunden.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#A8D67E] hover:text-[#1a1a1a] transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#A8D67E] hover:text-[#1a1a1a] transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#A8D67E] hover:text-[#1a1a1a] transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg>
                        </a>
                    </div>
                </div>
                
                <!-- Links Column 1 -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Leistungen</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Online Marketing Safari</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Content Creation Safari</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Social Media Safari</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">SEO Safari</a></li>
                    </ul>
                </div>
                
                <!-- Links Column 2 -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Unternehmen</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Über uns</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Team</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Karriere</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#A8D67E] transition-colors text-sm">Blog</a></li>
                    </ul>
                </div>
                
                <!-- Contact Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Kontakt</h3>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#A8D67E] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Musterstraße 123<br>1010 Wien, Österreich</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#A8D67E] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:hello@marketingsafari.at" class="hover:text-[#A8D67E] transition-colors">hello@marketingsafari.at</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#A8D67E] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+43123456789" class="hover:text-[#A8D67E] transition-colors">+43 1 234 567 89</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <!-- Copyright Bar -->
            <div class="border-t border-white/10 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    © <?php echo date('Y'); ?> Marketing Safari. Alle Rechte vorbehalten.
                </p>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">Impressum</a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">Datenschutz</a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">AGB</a>
                </div>
            </div>
            
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
