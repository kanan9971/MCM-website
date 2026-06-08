<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">

            <!-- Col 1: Logo + tagline -->
            <div class="footer-logo-col">
                <div class="footer-logo-brand">
                    <span class="logo-bar" style="height:36px;" aria-hidden="true"></span>
                    <span class="logo-text">
                        <span class="footer-logo-name">MCM Wealth</span>
                        <span class="footer-logo-sub">Management Limited</span>
                    </span>
                </div>
                <p class="footer-tagline">Long-term Capital Allocation<br>Hong Kong Single Family Office<br>Est. 2012</p>
            </div>

            <!-- Col 2: Company -->
            <div class="footer-col">
                <span class="footer-col-title">Company</span>
                <nav class="footer-links" aria-label="Company links">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
                    <a href="<?php echo esc_url( home_url( '/promotions/' ) ); ?>">Promotions</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
                </nav>
            </div>

            <!-- Col 3: Services -->
            <div class="footer-col">
                <span class="footer-col-title">Services</span>
                <nav class="footer-links" aria-label="Services links">
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Family Office Oversight</a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Wealth Coordination</a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Estate &amp; Legacy</a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Business Succession Planning</a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Tax Strategy</a>
                </nav>
            </div>

            <!-- Col 4: Contact -->
            <div class="footer-col">
                <span class="footer-col-title">Contact</span>
                <div class="footer-contact-items">
                    <div class="footer-contact-item">
                        <span class="flabel">Location</span>
                        <span class="fvalue">Hong Kong SAR</span>
                    </div>
                    <div class="footer-contact-item">
                        <span class="flabel">Email</span>
                        <span class="fvalue">
                            <a href="mailto:info@mcmwealth.com" style="color:inherit;">info@mcmwealth.com</a>
                        </span>
                    </div>
                    <div class="footer-contact-item">
                        <span class="flabel">Phone</span>
                        <span class="fvalue">+852 XXXX XXXX</span>
                    </div>
                </div>
            </div>

        </div><!-- .footer-grid -->

        <div class="footer-bottom">
            <p class="copyright">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> MCM Wealth Management Limited. All Rights Reserved.
            </p>
            <p class="disclaimer">
                This website is for informational purposes only and does not constitute financial advice. Past performance is not indicative of future results.
            </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
