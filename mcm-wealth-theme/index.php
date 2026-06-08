<?php get_header(); ?>

<!-- ═══════════════════════════════════════
     SECTION 1: HERO
═══════════════════════════════════════ -->
<section class="hero-home" aria-label="Hero">
    <div class="container">
        <div class="hero-home-inner">

            <!-- Left: Content -->
            <div class="hero-home-content">
                <span class="eyebrow reveal">Hong Kong Single Family Office</span>
                <h1 class="reveal reveal-delay-1">Wealth Lineage,<br><em class="accent-gold">Our Legacy.</em></h1>
                <p class="reveal reveal-delay-2">MCM is a single family office focused on long-term capital allocation and strategic investments — including private equity, hedge funds, and other alternative assets. We work with external advisors across the fields we invest in.</p>
                <div class="btn-group reveal reveal-delay-3">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Speak with our team</a>
                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="btn btn-ghost-dark">Learn our philosophy</a>
                </div>
            </div>

            <!-- Right: Visual Card -->
            <div class="hero-visual-card reveal reveal-delay-2">
                <svg class="hero-skyline" viewBox="0 0 380 200" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Hong Kong skyline illustration">
                    <!-- Sky gradient -->
                    <defs>
                        <linearGradient id="sky" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#2A1F14"/>
                            <stop offset="100%" stop-color="#4F3825"/>
                        </linearGradient>
                        <linearGradient id="water" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#2D2018"/>
                            <stop offset="100%" stop-color="#1A1208"/>
                        </linearGradient>
                    </defs>
                    <rect width="380" height="200" fill="url(#sky)"/>
                    <!-- Stars / city glow -->
                    <circle cx="60"  cy="30" r="1" fill="rgba(253,244,236,0.5)"/>
                    <circle cx="120" cy="20" r="1" fill="rgba(253,244,236,0.4)"/>
                    <circle cx="200" cy="15" r="1.5" fill="rgba(253,244,236,0.5)"/>
                    <circle cx="310" cy="25" r="1" fill="rgba(253,244,236,0.35)"/>
                    <circle cx="350" cy="18" r="1" fill="rgba(253,244,236,0.45)"/>
                    <!-- Buildings — back layer (muted) -->
                    <rect x="10"  y="80"  width="28" height="90" fill="#2A1E13" opacity=".8"/>
                    <rect x="40"  y="65"  width="20" height="105" fill="#2A1E13" opacity=".8"/>
                    <rect x="62"  y="75"  width="35" height="95" fill="#2A1E13" opacity=".85"/>
                    <rect x="100" y="55"  width="18" height="115" fill="#2A1E13" opacity=".8"/>
                    <rect x="290" y="70"  width="30" height="100" fill="#2A1E13" opacity=".8"/>
                    <rect x="330" y="60"  width="22" height="110" fill="#2A1E13" opacity=".75"/>
                    <rect x="355" y="80"  width="25" height="90" fill="#2A1E13" opacity=".7"/>
                    <!-- Buildings — mid layer -->
                    <rect x="120" y="60"  width="30" height="110" fill="#3A2918"/>
                    <rect x="152" y="40"  width="22" height="130" fill="#3A2918"/>
                    <!-- IFC-like tall tower -->
                    <rect x="176" y="20"  width="18" height="150" fill="#3D2C1E"/>
                    <rect x="180" y="16"  width="10" height="10" fill="#4A3420"/>
                    <rect x="184" y="10"  width="2"  height="10" fill="#D4691E" opacity=".6"/>
                    <!-- More mid buildings -->
                    <rect x="196" y="50"  width="28" height="120" fill="#3A2918"/>
                    <rect x="226" y="65"  width="20" height="105" fill="#3A2918"/>
                    <rect x="248" y="45"  width="24" height="125" fill="#3D2C1E"/>
                    <rect x="274" y="70"  width="16" height="100" fill="#3A2918"/>
                    <!-- Building windows (lit) -->
                    <rect x="128" y="70"  width="4" height="3" fill="#C9963A" opacity=".4"/>
                    <rect x="135" y="70"  width="4" height="3" fill="#C9963A" opacity=".3"/>
                    <rect x="128" y="80"  width="4" height="3" fill="#FDF4EC" opacity=".25"/>
                    <rect x="128" y="90"  width="4" height="3" fill="#FDF4EC" opacity=".2"/>
                    <rect x="135" y="85"  width="4" height="3" fill="#C9963A" opacity=".35"/>
                    <rect x="199" y="58"  width="5" height="3" fill="#FDF4EC" opacity=".2"/>
                    <rect x="207" y="58"  width="5" height="3" fill="#C9963A" opacity=".35"/>
                    <rect x="199" y="68"  width="5" height="3" fill="#FDF4EC" opacity=".15"/>
                    <rect x="250" y="55"  width="5" height="3" fill="#FDF4EC" opacity=".2"/>
                    <rect x="258" y="55"  width="5" height="3" fill="#C9963A" opacity=".3"/>
                    <rect x="180" y="30"  width="3" height="2" fill="#FDF4EC" opacity=".3"/>
                    <rect x="180" y="40"  width="3" height="2" fill="#FDF4EC" opacity=".25"/>
                    <rect x="180" y="50"  width="3" height="2" fill="#D4691E" opacity=".5"/>
                    <!-- Water / reflection -->
                    <rect x="0"   y="168" width="380" height="32" fill="url(#water)"/>
                    <!-- Reflection glow -->
                    <rect x="178" y="170" width="4" height="18" fill="#D4691E" opacity=".15"/>
                    <rect x="130" y="172" width="10" height="14" fill="#C9963A" opacity=".1"/>
                    <rect x="200" y="171" width="8"  height="12" fill="#FDF4EC" opacity=".07"/>
                    <!-- Horizon line -->
                    <rect x="0" y="167" width="380" height="1.5" fill="rgba(253,244,236,0.08)"/>
                </svg>

                <div class="hero-info-strip">
                    <div class="hero-info-item">
                        <span class="value">Est.<br>2012</span>
                        <span class="label">Founded</span>
                    </div>
                    <div class="hero-info-item">
                        <span class="value">HK</span>
                        <span class="label">Single Family Office</span>
                    </div>
                    <div class="hero-info-item">
                        <span class="value" style="font-size:13px;line-height:1.4;">Preserve<br>Adapt · Scale</span>
                        <span class="label">Our Philosophy</span>
                    </div>
                </div>
            </div><!-- .hero-visual-card -->

        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     SECTION 2: WHO WE ARE
═══════════════════════════════════════ -->
<section class="section" aria-labelledby="who-we-are-heading">
    <div class="container">
        <div class="section-intro text-center reveal">
            <span class="eyebrow">Who Are We?</span>
            <h2 id="who-we-are-heading">Our unique approach goes beyond transactions</h2>
            <p>MCM is a single family office. We focus on long-term capital allocation and strategic investments — including private equity, hedge funds, and other alternative assets — working with external advisors in the fields mentioned. Rooted in integrity and trust, our values guide our family with the same strength as our wealth.</p>
        </div>

        <div class="cards-3col">
            <div class="value-card reveal reveal-delay-1">
                <div class="value-card-badge">1</div>
                <h3>Family-Centric Vision</h3>
                <p>We strengthen lineage across generations, building structures and strategies that endure beyond any single market cycle or life event.</p>
            </div>
            <div class="value-card reveal reveal-delay-2">
                <div class="value-card-badge">2</div>
                <h3>Sharing Culture</h3>
                <p>We build community with other single family offices to share knowledge. We are not intermediaries — we share, we do not provide services.</p>
            </div>
            <div class="value-card reveal reveal-delay-3">
                <div class="value-card-badge">3</div>
                <h3>Partnership</h3>
                <p>We partner with external specialists — legal, tax, investment — and bring them together under one framework, ensuring transparency in every decision.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     SECTION 3: STATS BAND
═══════════════════════════════════════ -->
<div class="stats-band" role="region" aria-label="Key facts">
    <div class="container">
        <div class="stats-band-grid">
            <div class="stat-item reveal">
                <span class="stat-value">12+</span>
                <span class="stat-label">Years Established</span>
            </div>
            <div class="stat-item reveal reveal-delay-1">
                <span class="stat-value">HK</span>
                <span class="stat-label">Single Family Office</span>
            </div>
            <div class="stat-item reveal reveal-delay-2">
                <span class="stat-value">100%</span>
                <span class="stat-label">Family-Focused</span>
            </div>
            <div class="stat-item reveal reveal-delay-3">
                <span class="stat-value">&#8734;</span>
                <span class="stat-label">Generational Vision</span>
            </div>
        </div>
    </div>
</div>


<!-- ═══════════════════════════════════════
     SECTION 4: CREDIBILITY
═══════════════════════════════════════ -->
<section class="section--dark" aria-labelledby="credibility-heading">
    <div class="container">
        <div class="credibility-inner">

            <!-- Left -->
            <div class="credibility-left reveal">
                <span class="eyebrow">Our Credibility</span>
                <h2 id="credibility-heading">Preserving, growing, and transitioning our family's capital across generations</h2>
                <div class="credibility-divider"></div>
                <p>We preserve, grow, and transition our family's capital across generations — with long-term discipline and strategic focus.</p>
            </div>

            <!-- Right: 3 mini cards -->
            <div class="credibility-cards reveal reveal-delay-2">
                <div class="cred-card">
                    <span class="tag">Preserve</span>
                    <h3>Family-Centric Vision</h3>
                    <p>We strengthen lineage across generations, ensuring our family's wealth and identity endure together.</p>
                </div>
                <div class="cred-card">
                    <span class="tag">Share</span>
                    <h3>Sharing Culture</h3>
                    <p>We build community with other single family offices to share knowledge — we are not intermediaries, we share.</p>
                </div>
                <div class="cred-card">
                    <span class="tag">Partner</span>
                    <h3>Partnership</h3>
                    <p>We partner with external specialists — legal, tax, investment — bringing them together under one coherent framework.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     SECTION 5: SERVICES PREVIEW
═══════════════════════════════════════ -->
<section class="section--alt" aria-labelledby="services-heading">
    <div class="container">
        <div class="section-header reveal">
            <div>
                <span class="eyebrow">Investment Focus</span>
                <h2 id="services-heading">Where we allocate our capital</h2>
            </div>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost-pale">View investment focus</a>
        </div>

        <div class="services-grid">
            <div class="service-card reveal reveal-delay-1">
                <span class="service-card-number">01</span>
                <h3>Family Office Oversight</h3>
                <p>Long-term capital allocation, strategic investments, family wealth preservation, and multi-generational planning.</p>
            </div>
            <div class="service-card reveal reveal-delay-2">
                <span class="service-card-number">02</span>
                <h3>Wealth Coordination</h3>
                <p>Equities, bonds, fixed interest products, commodities, alternative investments (private equity, hedge funds), and property.</p>
            </div>
            <div class="service-card reveal reveal-delay-3">
                <span class="service-card-number">03</span>
                <h3>Estate &amp; Legacy</h3>
                <p>Estate and legacy strategies that safeguard assets, minimise risks, and ensure continuity of values across generations.</p>
            </div>
            <div class="service-card reveal reveal-delay-1">
                <span class="service-card-number">04</span>
                <h3>Business Succession Planning</h3>
                <p>Succession plans that protect business value, secure continuity, and prepare the next generation for success.</p>
            </div>
            <div class="service-card reveal reveal-delay-2">
                <span class="service-card-number">05</span>
                <h3>Tax Strategy</h3>
                <p>Optimising our tax arrangements with external cross-border tax advisors, to reduce liabilities and enhance efficiency.</p>
            </div>
            <div class="service-card service-card-bespoke reveal reveal-delay-3">
                <div class="bespoke-icon" aria-hidden="true">&#9670;</div>
                <h3>One Family. One Conversation.</h3>
                <p>We do not solicit external clients, but we welcome dialogue with like-minded families, advisors, and partners.</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-ghost">Get in touch</a>
            </div>
        </div>

    </div>
</section>


<!-- ═══════════════════════════════════════
     SECTION 6: CTA BAND
═══════════════════════════════════════ -->
<section class="cta-band" aria-labelledby="cta-heading">
    <!-- Decorative concentric circles -->
    <svg class="cta-band-circles" viewBox="0 0 700 700" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="350" cy="350" r="100" stroke="#EAD9C8" stroke-width="1"/>
        <circle cx="350" cy="350" r="175" stroke="#EAD9C8" stroke-width="1"/>
        <circle cx="350" cy="350" r="250" stroke="#EAD9C8" stroke-width="1"/>
        <circle cx="350" cy="350" r="325" stroke="#EAD9C8" stroke-width="0.75"/>
        <circle cx="350" cy="350" r="340" stroke="#EAD9C8" stroke-width="0.5" stroke-dasharray="4 6"/>
    </svg>

    <div class="cta-band-content reveal">
        <span class="eyebrow">Begin the Conversation</span>
        <h2 id="cta-heading">One family. One conversation.</h2>
        <p>We are a single family office. We do not solicit external clients, but we welcome dialogue with like-minded families, advisors, and partners.</p>
        <div class="btn-group" style="justify-content:center;">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Start a conversation</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Our investment focus</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
