<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<!-- ═══════════════════════════════════════
     PAGE HERO
═══════════════════════════════════════ -->
<section class="hero-page" aria-label="About Us hero">
    <div class="container">
        <span class="eyebrow reveal">Hong Kong Single Family Office</span>
        <h1 class="reveal reveal-delay-1">Integrative wealth management<br><em class="accent-gold">built for your family.</em></h1>
        <p class="reveal reveal-delay-2">MCM Wealth Management Limited is a Hong Kong-based Single Family Office built on the principle of integrative wealth management — creating beneficial solutions that preserve, adapt, and scale value across generations.</p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     WHO WE ARE — Mission / Vision / Promise
═══════════════════════════════════════ -->
<section class="section--white" aria-labelledby="about-mission-heading">
    <div class="container">
        <div class="section-intro text-center reveal">
            <span class="eyebrow">Who We Are</span>
            <h2 id="about-mission-heading">Our mission, vision and promise</h2>
        </div>

        <div class="mission-cards">
            <div class="mission-card reveal reveal-delay-1">
                <div class="mission-icon" aria-hidden="true">&#9632;</div>
                <h3>Our Mission</h3>
                <p>To provide holistic wealth coordination services — legacy estate planning, tax strategy, and business succession planning — to institutions and individual clients in Hong Kong, with a focus on multi-generational impact.</p>
            </div>
            <div class="mission-card reveal reveal-delay-2">
                <div class="mission-icon" aria-hidden="true">&#9651;</div>
                <h3>Our Vision</h3>
                <p>A world where every family's wealth — financial, cultural, and relational — is preserved and grown across generations. We believe that well-managed wealth lineage is the foundation of lasting legacy.</p>
            </div>
            <div class="mission-card reveal reveal-delay-3">
                <div class="mission-icon" aria-hidden="true">&#10022;</div>
                <h3>Our Promise</h3>
                <p>We listen deeply, plan carefully, and coordinate comprehensively. Every recommendation is made in the sole interest of your family, backed by deep expertise and a genuine commitment to your long-term wellbeing.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     PHILOSOPHY
═══════════════════════════════════════ -->
<section class="philosophy-section" aria-labelledby="philosophy-heading">
    <div class="container">
        <span class="eyebrow reveal" style="color:var(--orange);">Our Philosophy</span>
        <blockquote class="philosophy-quote reveal reveal-delay-1" id="philosophy-heading">
            &#8220;Wealth Lineage = Our Legacy&#8221;
        </blockquote>
        <p class="reveal reveal-delay-2">
            Founded in July 2012, MCM Wealth Management has been guided by a single conviction: that wealth is not merely financial — it is a living lineage of values, relationships, and opportunity. Our role is to be the trusted custodian of that lineage, generation after generation.
        </p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     OUR APPROACH — 4-Step Process
═══════════════════════════════════════ -->
<section class="section--alt" aria-labelledby="approach-heading">
    <div class="container">
        <div class="section-intro text-center reveal">
            <span class="eyebrow">Our Approach</span>
            <h2 id="approach-heading">How we work with your family</h2>
            <p>A structured, four-stage process designed to understand your family deeply and build solutions that endure.</p>
        </div>

        <div class="approach-grid">
            <div class="approach-card reveal reveal-delay-1">
                <div class="approach-number">1</div>
                <h3>Understand</h3>
                <p>We begin with deep listening — learning your family's history, values, relationships, goals, and concerns before making any recommendation.</p>
            </div>
            <div class="approach-card reveal reveal-delay-2">
                <div class="approach-number">2</div>
                <h3>Design</h3>
                <p>We design a bespoke wealth coordination strategy that addresses your family's complete financial, legal, and personal landscape.</p>
            </div>
            <div class="approach-card reveal reveal-delay-3">
                <div class="approach-number">3</div>
                <h3>Coordinate</h3>
                <p>We bring together specialists across estate planning, tax strategy, investment coordination, and succession planning to execute your strategy.</p>
            </div>
            <div class="approach-card reveal reveal-delay-4">
                <div class="approach-number">4</div>
                <h3>Evolve</h3>
                <p>Wealth structures must adapt. We continuously review and evolve your plan as your family, the markets, and the regulatory landscape change.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     CTA
═══════════════════════════════════════ -->
<section class="cta-band" aria-labelledby="about-cta-heading">
    <svg class="cta-band-circles" viewBox="0 0 700 700" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="350" cy="350" r="100" stroke="#EAD9C8" stroke-width="1"/>
        <circle cx="350" cy="350" r="175" stroke="#EAD9C8" stroke-width="1"/>
        <circle cx="350" cy="350" r="250" stroke="#EAD9C8" stroke-width="1"/>
        <circle cx="350" cy="350" r="325" stroke="#EAD9C8" stroke-width="0.75"/>
    </svg>
    <div class="cta-band-content reveal">
        <span class="eyebrow">Begin the Conversation</span>
        <h2 id="about-cta-heading">Ready to start building your family's legacy?</h2>
        <p>Speak with our team to explore how MCM Wealth can help you preserve, adapt, and scale your family's wealth across generations.</p>
        <div class="btn-group" style="justify-content:center;">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Speak with our team</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Our services</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
