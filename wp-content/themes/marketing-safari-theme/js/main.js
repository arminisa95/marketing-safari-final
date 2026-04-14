(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu
    var toggle = document.getElementById('mobile-toggle');
    var nav    = document.getElementById('main-nav');
    if (toggle && nav) {
      toggle.addEventListener('click', function() {
        nav.classList.toggle('active');
      });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(a) {
      a.addEventListener('click', function(e) {
        var id = this.getAttribute('href');
        if (id === '#') return;
        var el = document.querySelector(id);
        if (el) {
          e.preventDefault();
          el.scrollIntoView({ behavior: 'smooth', block: 'start' });
          // Close mobile menu
          if (nav) nav.classList.remove('active');
        }
      });
    });
  });

})();
