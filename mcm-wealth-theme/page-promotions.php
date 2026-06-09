<?php
/**
 * Template Name: Promotions
 */
get_header();
?>

<!-- ═══════════════════════════════════════
     PAGE HERO — dark bg
═══════════════════════════════════════ -->
<section class="hero-page--dark" aria-label="Promotions hero">
    <div class="container">
        <span class="eyebrow reveal">Exclusive Packages</span>
        <h1 class="reveal reveal-delay-1">Exclusive packages designed for<br><em class="accent-gold">your family's next step.</em></h1>
        <p class="reveal reveal-delay-2" style="color:var(--text-on-dark-muted); font-size:18px; margin-top:16px; max-width:580px;">
            We have created a range of bundled solutions to help families take the first step — or the next step — towards comprehensive wealth coordination.
        </p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     PROMO GRID
═══════════════════════════════════════ -->
<section class="section--white" aria-labelledby="promos-heading">
    <div class="container">
        <h2 id="promos-heading" class="sr-only">Our Promotional Packages</h2>

        <div class="promos-grid">

            <!-- 1: Family Wealth Academy -->
            <div class="promo-card reveal reveal-delay-1">
                <div class="promo-card-top">
                    <span class="promo-tag">Family Education</span>
                    <span class="promo-badge">20% Off + Free Consultation</span>
                </div>
                <h3>Family Wealth Academy</h3>
                <p class="promo-subtitle">Your family's financial education, reimagined.</p>
                <p>Receive a complimentary first consultation plus 20% off our flagship financial education programme — including a personalised family wealth roadmap tailored to your goals and circumstances.</p>
                <div class="promo-highlight">
                    Complimentary first consultation + 20% off the flagship financial education programme, including a personalised family wealth roadmap.
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="align-self:flex-start;">Enquire now</a>
            </div>

            <!-- 2: Legacy Planning Package -->
            <div class="promo-card reveal reveal-delay-2">
                <div class="promo-card-top">
                    <span class="promo-tag">Estate &amp; Legacy</span>
                    <span class="promo-badge">15% Reduced Fee</span>
                </div>
                <h3>Legacy Planning Package</h3>
                <p class="promo-subtitle">Generational Continuity Package</p>
                <p>A comprehensive, bundled solution covering wills, trusts, succession structures, and tax planning — all coordinated under one roof at a reduced combined fee, ensuring your legacy is protected from every angle.</p>
                <div class="promo-highlight">
                    Bundled wills, trusts, succession structures + tax planning at 15% reduced fee.
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="align-self:flex-start;">Enquire now</a>
            </div>

            <!-- 3: Wealth Coordination Offer -->
            <div class="promo-card reveal reveal-delay-1">
                <div class="promo-card-top">
                    <span class="promo-tag">Wealth Coordination</span>
                    <span class="promo-badge">10% Discount</span>
                </div>
                <h3>Wealth Coordination Offer</h3>
                <p class="promo-subtitle">Holistic structuring, intelligently bundled.</p>
                <p>Receive a 10% discount on comprehensive wealth structuring when combined with our investment advisory service, plus free quarterly family wealth review sessions to keep your strategy on track.</p>
                <div class="promo-highlight">
                    10% discount on wealth structuring + investment advisory, plus free quarterly family wealth reviews.
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="align-self:flex-start;">Enquire now</a>
            </div>

            <!-- 4: Global Advisory Package -->
            <div class="promo-card reveal reveal-delay-2">
                <div class="promo-card-top">
                    <span class="promo-tag">International Advisory</span>
                    <span class="promo-badge">12% Off + Briefing</span>
                </div>
                <h3>Global Advisory Package</h3>
                <p class="promo-subtitle">Global Reach Package</p>
                <p>12% off cross-border advisory covering international tax planning, residency strategies, and global investment structures, plus one complimentary global market briefing tailored to your family's footprint.</p>
                <div class="promo-highlight">
                    12% off cross-border advisory + one complimentary global market briefing.
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="align-self:flex-start;">Enquire now</a>
            </div>

            <!-- 5: Enterprise Solutions -->
            <div class="promo-card reveal reveal-delay-1">
                <div class="promo-card-top">
                    <span class="promo-tag">Business &amp; Enterprise</span>
                    <span class="promo-badge">Reduced Fees</span>
                </div>
                <h3>Enterprise Solutions</h3>
                <p class="promo-subtitle">Built for family-owned enterprises.</p>
                <p>Reduced corporate advisory fees for family-owned enterprises seeking succession planning, governance structures, and business valuation strategies — recognising the unique challenges of family business management.</p>
                <div class="promo-highlight">
                    Reduced corporate advisory fees for family-owned enterprises.
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="align-self:flex-start;">Enquire now</a>
            </div>

            <!-- 6: Health & Wellbeing Programs -->
            <div class="promo-card reveal reveal-delay-2">
                <div class="promo-card-top">
                    <span class="promo-tag">Wellbeing</span>
                    <span class="promo-badge">25% Off</span>
                </div>
                <h3>Health &amp; Wellbeing Programs</h3>
                <p class="promo-subtitle">Holistic health for families who value the full picture.</p>
                <p>25% off our introductory holistic health and personalised wellbeing coaching package — because enduring wealth includes the health and vitality of every family member across every generation.</p>
                <div class="promo-highlight">
                    25% off introductory holistic health + personalised wellbeing coaching package.
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="align-self:flex-start;">Enquire now</a>
            </div>

        </div><!-- .promos-grid -->

        <p class="terms-note reveal">Terms and conditions apply. All offers are subject to eligibility and availability. Please contact us for full details.</p>

    </div>
</section>


<!-- ═══════════════════════════════════════
     CTA STRIP
═══════════════════════════════════════ -->
<section class="cta-strip" aria-labelledby="promos-cta-heading">
    <div class="container">
        <div class="reveal">
            <span class="eyebrow">Get in Touch</span>
            <h2 id="promos-cta-heading">Speak to us about any of these packages</h2>
            <p>Our team will guide you to the offer that best fits your family's needs — with no obligation and complete confidentiality.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Contact us today</a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     NEWSLETTER
═══════════════════════════════════════ -->
<section class="newsletter-section" aria-labelledby="newsletter-heading">
    <div class="container">
        <div class="newsletter-inner">

            <div class="newsletter-left reveal">
                <span class="eyebrow">Stay Informed</span>
                <h2 id="newsletter-heading">Exclusive insights,<br><em>delivered to your family.</em></h2>
                <p>Join our private newsletter and be the first to hear about new packages, market intelligence, and wealth strategies — curated exclusively for single family offices and like-minded families.</p>
                <ul class="newsletter-perks">
                    <li>Early access to new promotions &amp; bundled packages</li>
                    <li>Quarterly market &amp; investment insights</li>
                    <li>Estate, tax, and succession planning updates</li>
                    <li>Invitations to private family office briefings</li>
                </ul>
            </div>

            <div class="newsletter-form-wrap reveal reveal-delay-2">
                <h3>Subscribe to our newsletter</h3>
                <p>No spam. Unsubscribe at any time. Strictly confidential.</p>

                <?php
                $nl_success = false;
                if ( isset($_POST['nl_nonce']) && wp_verify_nonce($_POST['nl_nonce'], 'mcm_newsletter') ) {
                    $nl_email = sanitize_email($_POST['nl_email'] ?? '');
                    $nl_name  = sanitize_text_field($_POST['nl_name'] ?? '');
                    if ( is_email($nl_email) ) {
                        $nl_success = true;
                    }
                }
                ?>

                <?php if ( $nl_success ) : ?>
                <div class="nl-success" style="display:block;">
                    <div class="nl-tick">&#10003;</div>
                    <p>You're on the list. Welcome to the MCM circle.</p>
                </div>
                <?php else : ?>
                <form class="newsletter-form" method="post" id="nl-form">
                    <?php wp_nonce_field('mcm_newsletter', 'nl_nonce'); ?>
                    <div class="nl-field">
                        <label for="nl-name">Full Name</label>
                        <input type="text" id="nl-name" name="nl_name" placeholder="Your full name" autocomplete="name">
                    </div>
                    <div class="nl-field">
                        <label for="nl-email">Email Address</label>
                        <input type="email" id="nl-email" name="nl_email" placeholder="your@email.com" autocomplete="email" required>
                    </div>
                    <button type="submit" class="nl-submit">Subscribe — It's Free</button>
                    <p class="nl-privacy">By subscribing you agree to receive occasional communications from MCM Wealth Management Limited. We will never share your details with third parties.</p>
                </form>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
