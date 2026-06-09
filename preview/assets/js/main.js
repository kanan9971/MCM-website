/* MCM Wealth — main.js */

(function () {
  'use strict';

  /* ── Scroll Reveal ── */
  var revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  function initReveal() {
    var els = document.querySelectorAll('.reveal');
    els.forEach(function (el) {
      /* Elements already in viewport on load get .in immediately */
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 40) {
        el.classList.add('in');
      } else {
        revealObserver.observe(el);
      }
    });
  }

  /* ── Sticky Header ── */
  function initStickyHeader() {
    var header = document.querySelector('.site-header');
    if (!header) return;
    function onScroll() {
      if (window.scrollY > 10) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── Mobile Hamburger ── */
  function initMobileNav() {
    var toggle = document.querySelector('.nav-toggle');
    if (!toggle) return;
    toggle.addEventListener('click', function () {
      document.body.classList.toggle('nav-open');
      var expanded = document.body.classList.contains('nav-open');
      toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    });

    /* Close menu on nav link click */
    var links = document.querySelectorAll('.header-nav .nav-menu a');
    links.forEach(function (link) {
      link.addEventListener('click', function () {
        document.body.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });

    /* Close on outside click */
    document.addEventListener('click', function (e) {
      if (
        document.body.classList.contains('nav-open') &&
        !e.target.closest('.header-nav') &&
        !e.target.closest('.nav-toggle')
      ) {
        document.body.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ── Contact Form Client-side ── */
  function initContactForm() {
    var form = document.querySelector('.contact-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
      /* Allow normal PHP submission; just clear any old messages */
      var old = form.querySelector('.form-success, .form-error');
      if (old) old.remove();
    });
  }

  /* ── Init ── */
  document.addEventListener('DOMContentLoaded', function () {
    initReveal();
    initStickyHeader();
    initMobileNav();
    initContactForm();
    initHeroCarousel();
  });

  /* ── Hero Carousel ── */
  function initHeroCarousel() {
    var carousel = document.querySelector('.carousel');
    if (!carousel) return;

    var track = carousel.querySelector('.carousel-track');
    var slides = Array.prototype.slice.call(track.querySelectorAll('.carousel-slide'));
    // prev/next buttons removed from DOM
    var dotsWrap = carousel.querySelector('.carousel-dots');
    var current = 0;
    var autoplayInterval = 2500;
    var timer = null;
    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    slides.forEach(function (s, i) {
      var btn = document.createElement('button');
      btn.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      btn.dataset.index = i;
      btn.type = 'button';
      btn.addEventListener('click', function () { goTo(i); resetTimer(); });
      dotsWrap.appendChild(btn);
    });

    var dots = Array.prototype.slice.call(dotsWrap.querySelectorAll('button'));

    function update() {
      // update aria and dot state
      slides.forEach(function (s, i) {
        s.setAttribute('aria-hidden', i === current ? 'false' : 'true');
      });
      dots.forEach(function (d, i) { d.classList.toggle('active', i === current); });
      // move track
      if (track) track.style.transform = 'translateX(-' + (current * 100) + '%)';
    }

    function goTo(index) {
      current = (index + slides.length) % slides.length;
      update();
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    // navigation buttons removed; keep dot and swipe interactions

    // touch / pointer swipe
    var startX = null;
    carousel.addEventListener('pointerdown', function (e) {
      startX = e.clientX;
      try { carousel.setPointerCapture(e.pointerId); } catch (err) {}
    });
    carousel.addEventListener('pointerup', function (e) {
      if (startX === null) return;
      var dx = e.clientX - startX;
      if (Math.abs(dx) > 40) {
        if (dx < 0) next(); else prev();
        resetTimer();
      }
      startX = null;
    });

    function startTimer() {
      if (reduced) return;
      stopTimer();
      timer = setInterval(next, autoplayInterval);
    }
    function stopTimer() { if (timer) { clearInterval(timer); timer = null; } }
    function resetTimer() { stopTimer(); startTimer(); }

    carousel.addEventListener('mouseenter', function () { stopTimer(); });
    carousel.addEventListener('mouseleave', function () { startTimer(); });

    // init
    goTo(0);
    startTimer();
  }

})();
