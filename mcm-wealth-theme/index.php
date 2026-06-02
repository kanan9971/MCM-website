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
                <p class="reveal reveal-delay-2">MCM Wealth Management Limited provides holistic wealth coordination services — preserving, adapting, and scaling value across generations for families and institutions in Hong Kong.</p>
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
            <span class="eyebrow">Who We Are</span>
            <h2 id="who-we-are-heading">Built on the principle of integrative wealth management</h2>
            <p>We create beneficial solutions that preserve, adapt, and scale value across generations — delivering holistic wealth coordination that puts your family at the centre of everything we do.</p>
        </div>

        <div class="cards-3col">
            <div class="value-card reveal reveal-delay-1">
                <div class="value-card-badge">1</div>
                <h3>Client-Centric Care</h3>
                <p>We listen deeply to every concern. Your family's unique circumstances, goals, and values shape every recommendation we make.</p>
            </div>
            <div class="value-card reveal reveal-delay-2">
                <div class="value-card-badge">2</div>
                <h3>Family-Oriented Vision</h3>
                <p>We strengthen lineage across generations, building structures and strategies that endure beyond any single market cycle or life event.</p>
            </div>
            <div class="value-card reveal reveal-delay-3">
                <div class="value-card-badge">3</div>
                <h3>Sharing Culture</h3>
                <p>We foster collaboration and knowledge exchange, ensuring that wisdom, values, and opportunity pass seamlessly from generation to generation.</p>
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
                <span class="eyebrow">Our Approach</span>
                <h2 id="credibility-heading">Stewardship, planning and strategy — at every stage</h2>
                <div class="credibility-divider"></div>
                <p>We provide holistic wealth coordination through three interconnected disciplines — protecting what you have built, designing structures for what comes next, and growing opportunity across every generation.</p>
            </div>

            <!-- Right: 3 mini cards -->
            <div class="credibility-cards reveal reveal-delay-2">
                <div class="cred-card">
                    <span class="tag">Preserve</span>
                    <h3>Stewardship</h3>
                    <p>Protecting assets, values, and legacy so that the foundations your family has built remain strong and intact across time.</p>
                </div>
                <div class="cred-card">
                    <span class="tag">Adapt</span>
                    <h3>Planning</h3>
                    <p>Designing flexible wealth, tax, and estate structures that evolve with your family's needs and the world around you.</p>
                </div>
                <div class="cred-card">
                    <span class="tag">Scale</span>
                    <h3>Strategy</h3>
                    <p>Growing wealth and unlocking opportunity across generations through disciplined coordination and long-term vision.</p>
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
                <span class="eyebrow">What We Do</span>
                <h2 id="services-heading">Comprehensive wealth coordination services</h2>
            </div>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost-pale">View all services</a>
        </div>

        <div class="services-grid">
            <div class="service-card reveal reveal-delay-1">
                <span class="service-card-number">01</span>
                <h3>Family Office</h3>
                <p>Family wealth preservation, lifestyle &amp; governance solutions, multi-generational planning, and philanthropy strategies.</p>
            </div>
            <div class="service-card reveal reveal-delay-2">
                <span class="service-card-number">02</span>
                <h3>Wealth Coordination</h3>
                <p>Equities, bonds, fixed interest products, commodities, alternative investments, and property — coordinated holistically.</p>
            </div>
            <div class="service-card reveal reveal-delay-3">
                <span class="service-card-number">03</span>
                <h3>Estate &amp; Legacy</h3>
                <p>Long-term care planning, asset protection structures, cross-generational wealth transfer, and wishes documentation.</p>
            </div>
            <div class="service-card reveal reveal-delay-1">
                <span class="service-card-number">04</span>
                <h3>Business Succession</h3>
                <p>Ownership transition planning, leadership succession, business valuation strategy, and next-generation preparation.</p>
            </div>
            <div class="service-card reveal reveal-delay-2">
                <span class="service-card-number">05</span>
                <h3>Tax Strategy</h3>
                <p>Tax liability reduction, cross-border planning, efficiency enhancement, and long-term structure optimisation.</p>
            </div>
            <div class="service-card service-card-bespoke reveal reveal-delay-3">
                <div class="bespoke-icon" aria-hidden="true">&#43;</div>
                <h3>Bespoke Solutions</h3>
                <p>Every family is different. Talk to us about a tailored package for your specific circumstances.</p>
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
        <h2 id="cta-heading">Your family's legacy starts with a single conversation</h2>
        <p>Speak with our team to explore how MCM Wealth can help you preserve, adapt, and scale your family's wealth across generations.</p>
        <div class="btn-group" style="justify-content:center;">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Speak with our team</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Explore our services</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
