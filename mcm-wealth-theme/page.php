<?php get_header(); ?>

<!-- Generic Page Hero -->
<section class="hero-page">
    <div class="container">
        <span class="eyebrow reveal">MCM Wealth Management</span>
        <h1 class="reveal reveal-delay-1"><?php the_title(); ?></h1>
    </div>
</section>

<!-- Page Content -->
<section class="section">
    <div class="container" style="max-width:780px;">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
