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

  /* ── Back to Top ── */
  function initBackToTop() {
    var btn = document.querySelector('.back-to-top');
    if (!btn) return;
    window.addEventListener('scroll', function () {
      if (window.scrollY > 400) {
        btn.classList.add('visible');
      } else {
        btn.classList.remove('visible');
      }
    }, { passive: true });
    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ── Init ── */
  document.addEventListener('DOMContentLoaded', function () {
    initReveal();
    initStickyHeader();
    initMobileNav();
    initContactForm();
    initBackToTop();
  });
})();
