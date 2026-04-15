document.addEventListener('DOMContentLoaded', function() {
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  var gallery = document.querySelector('[data-gallery-carousel]');
  var prevBtn = document.querySelector('.gallery-nav-btn[data-gallery-dir="prev"]');
  var nextBtn = document.querySelector('.gallery-nav-btn[data-gallery-dir="next"]');

  if (!gallery || !prevBtn || !nextBtn) {
    return;
  }

  var images = Array.prototype.slice.call(gallery.querySelectorAll('img'));
  var total = parseInt(gallery.getAttribute('data-gallery-total') || '0', 10);
  var base = gallery.getAttribute('data-gallery-base') || '';

  if (!images.length || !total || !base) {
    return;
  }

  var currentStart = 1;

  function normalizedIndex(value) {
    return ((value - 1 + total) % total) + 1;
  }

  function render() {
    images.forEach(function(image, idx) {
      var fileIndex = normalizedIndex(currentStart + idx);
      image.src = image.src.replace(/[^/]*$/, base + '-' + fileIndex + '.webp');
    });
  }

  prevBtn.addEventListener('click', function() {
    currentStart = normalizedIndex(currentStart - 1);
    render();
  });

  nextBtn.addEventListener('click', function() {
    currentStart = normalizedIndex(currentStart + 1);
    render();
  });
});
