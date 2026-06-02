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
        <span class="eyebrow reveal">Our Services</span>
        <h1 class="reveal reveal-delay-1">Comprehensive wealth coordination<br>for your family's entire journey</h1>
        <p class="reveal reveal-delay-2">Five interconnected disciplines — designed to work together to preserve your family's legacy, adapt to change, and grow opportunity across every generation.</p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     SERVICE CARDS — Full Detail
═══════════════════════════════════════ -->
<section class="section--white" aria-labelledby="services-list-heading">
    <div class="container">
        <h2 id="services-list-heading" class="sr-only">Our Services</h2>

        <div class="services-list">

            <!-- 01 Family Office -->
            <div class="service-full-card reveal">
                <div class="service-full-left">
                    <span class="number">01</span>
                    <h3>Family Office</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">How do you preserve a family's identity alongside its wealth?</p>
                    <p>Our Family Office service provides the structural and operational backbone your family needs to manage wealth holistically — coordinating governance, lifestyle, philanthropy, and multi-generational planning under one trusted partnership.</p>
                    <ul class="service-bullets">
                        <li>Family Wealth Preservation</li>
                        <li>Lifestyle &amp; Governance Solutions</li>
                        <li>Multi-generational Planning</li>
                        <li>Philanthropy &amp; Impact Strategies</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="learn-more">Learn more &rarr;</a>
                </div>
            </div>

            <!-- 02 Wealth Coordination -->
            <div class="service-full-card reveal">
                <div class="service-full-left">
                    <span class="number">02</span>
                    <h3>Wealth Coordination</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">Is your investment portfolio truly aligned with your family's long-term goals?</p>
                    <p>We coordinate across the full spectrum of asset classes, ensuring that your investments are structured holistically — balancing growth, income, and preservation according to your family's risk appetite and generational horizon.</p>
                    <ul class="service-bullets">
                        <li>Equities &amp; Bonds</li>
                        <li>Fixed Interest Products</li>
                        <li>Commodities</li>
                        <li>Alternative Investments</li>
                        <li>Property</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="learn-more">Learn more &rarr;</a>
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
                    <p class="teaser">What happens to your family's wealth when the unexpected occurs?</p>
                    <p>We design estate and legacy structures that protect your assets and ensure your wishes are honoured — across borders, across generations, and across every life event.</p>
                    <ul class="service-bullets">
                        <li>Long-term care planning</li>
                        <li>Asset protection structures</li>
                        <li>Cross-generational wealth transfer</li>
                        <li>Wishes documentation &amp; execution</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="learn-more">Learn more &rarr;</a>
                </div>
            </div>

            <!-- 04 Business Succession -->
            <div class="service-full-card reveal reveal-delay-2" style="grid-template-columns:1fr; gap:20px; padding:36px 32px;">
                <div class="service-full-left">
                    <span class="number" style="font-size:56px;">04</span>
                    <h3>Business Succession</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">Is your family business ready for the next generation of leadership?</p>
                    <p>We guide families through the complex process of business succession — ensuring ownership transitions are structured effectively, leadership is prepared, and business value is protected.</p>
                    <ul class="service-bullets">
                        <li>Ownership transition planning</li>
                        <li>Leadership succession</li>
                        <li>Business valuation strategy</li>
                        <li>Next-generation preparation</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="learn-more">Learn more &rarr;</a>
                </div>
            </div>

            <!-- 05 Tax Strategy -->
            <div class="service-full-card reveal reveal-delay-3" style="grid-template-columns:1fr; gap:20px; padding:36px 32px;">
                <div class="service-full-left">
                    <span class="number" style="font-size:56px;">05</span>
                    <h3>Tax Strategy</h3>
                </div>
                <div class="service-full-right">
                    <p class="teaser">Are you maximising efficiency across your family's global tax footprint?</p>
                    <p>We design tax structures that are efficient, compliant, and built for the long term — reducing unnecessary liability across jurisdictions and ensuring your wealth remains working for your family.</p>
                    <ul class="service-bullets">
                        <li>Tax liability reduction</li>
                        <li>Cross-border tax planning</li>
                        <li>Efficiency enhancement</li>
                        <li>Long-term structure optimisation</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="learn-more">Learn more &rarr;</a>
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
            <span class="eyebrow">Get Started</span>
            <h2 id="services-cta-heading">Not sure which service is right for you?</h2>
            <p>Speak with our team for a confidential, no-obligation consultation. We'll help you identify the right approach for your family's specific situation.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Book a consultation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
