/**
 * Marketing Safari Theme - Main JavaScript
 */

(function() {
    'use strict';
    
    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
    });
    
    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const nav = document.querySelector('.main-nav');
        
        if (!toggle || !nav) return;
        
        toggle.addEventListener('click', function() {
            nav.classList.toggle('active');
        });
    }
    
    /**
     * Smooth Scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    /**
     * Header scroll effect
     */
    function initHeaderScroll() {
        const header = document.querySelector('.site-header');
        if (!header) return;
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.style.backgroundColor = 'rgba(26, 26, 26, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.backgroundColor = 'transparent';
                header.style.backdropFilter = 'none';
            }
        });
    }
    
})();
