<?php
/**
 * Template Name: Services
 */
get_header();
?>

<!-- ═══════════════════════════════════════
     PAGE HERO
═══════════════════════════════════════ -->
<section class="hero-page" aria-label="Services hero">
    <div class="container">
        <span class="eyebrow reveal">Investment Focus</span>
        <h1 class="reveal reveal-delay-1">We are a single family office.<br>Here is where we allocate our capital.</h1>
        <p class="reveal reveal-delay-2">Five interconnected areas of focus — working together to preserve, coordinate, and grow our family's capital across generations.</p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     SERVICE CARDS — Full Detail
═══════════════════════════════════════ -->
<section class="section--white" aria-labelledby="services-list-heading">
    <div class="container">
        <h2 id="services-list-heading" class="sr-only">Our Services</h2>

        <div class="services-list">

            <!-- 01 Family Office Oversight -->
            <div class="service-full-card reveal">
                <div class="service-full-left">
                    <span class="number">01</span>
                    <h3>Family Office Oversight</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">How do we coordinate our family's wealth as circumstances change?</p>
                    <p>We oversee and coordinate our family's wealth with structures that adapt to changing circumstances.</p>
                    <ul class="service-bullets">
                        <li>Long-term capital allocation</li>
                        <li>Strategic investments (private equity, hedge funds, etc.)</li>
                        <li>Family wealth preservation</li>
                        <li>Multi-generational planning</li>
                    </ul>
                </div>
            </div>

            <!-- 02 Wealth Coordination -->
            <div class="service-full-card reveal">
                <div class="service-full-left">
                    <span class="number">02</span>
                    <h3>Wealth Coordination</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">How do we align every aspect of our wealth?</p>
                    <p>We work with external advisors to align all aspects of our wealth.</p>
                    <ul class="service-bullets">
                        <li>Equities</li>
                        <li>Bonds</li>
                        <li>Fixed interest products</li>
                        <li>Commodities</li>
                        <li>Alternative investments (private equity, hedge funds)</li>
                        <li>Property</li>
                    </ul>
                </div>
            </div>

        </div><!-- .services-list -->

        <!-- 03–05: 3-column grid -->
        <div class="services-grid-3col">

            <!-- 03 Estate & Legacy -->
            <div class="service-full-card reveal reveal-delay-1" style="grid-template-columns:1fr; gap:20px; padding:36px 32px;">
                <div class="service-full-left">
                    <span class="number" style="font-size:56px;">03</span>
                    <h3>Estate &amp; Legacy</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">How do we safeguard our family's values across generations?</p>
                    <p>We design estate and legacy strategies that safeguard assets, minimise risks, and ensure continuity of values across generations — working with external legal and trust advisors.</p>
                </div>
            </div>

            <!-- 04 Business Succession Planning -->
            <div class="service-full-card reveal reveal-delay-2" style="grid-template-columns:1fr; gap:20px; padding:36px 32px;">
                <div class="service-full-left">
                    <span class="number" style="font-size:56px;">04</span>
                    <h3>Business Succession Planning</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">How do we prepare the next generation for success?</p>
                    <p>We structure succession plans that protect business value, secure continuity, and prepare the next generation for success — alongside external legal and tax specialists.</p>
                </div>
            </div>

            <!-- 05 Tax Strategy -->
            <div class="service-full-card reveal reveal-delay-3" style="grid-template-columns:1fr; gap:20px; padding:36px 32px;">
                <div class="service-full-left">
                    <span class="number" style="font-size:56px;">05</span>
                    <h3>Tax Strategy</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">How do we ensure no unnecessary costs or inefficiencies?</p>
                    <p>We optimise our tax arrangements to reduce liabilities and enhance efficiency. We partner with external cross-border tax advisors to ensure no unnecessary costs or inefficiencies.</p>
                </div>
            </div>

        </div><!-- .services-grid-3col -->
    </div>
</section>


<!-- ═══════════════════════════════════════
     CTA STRIP
═══════════════════════════════════════ -->
<section class="cta-strip" aria-labelledby="services-cta-heading">
    <div class="container">
        <div class="reveal">
            <span class="eyebrow">One Family. One Conversation.</span>
            <h2 id="services-cta-heading">We welcome dialogue with like-minded families, advisors, and partners</h2>
            <p>We are a single family office and do not solicit external clients — but we are always open to a conversation with those who share our values and outlook.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Start a conversation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
