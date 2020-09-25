<?php
get_header();
?>

<div class="home">

    <?php
    get_template_part('template-parts/homepage/content', 'headline');
    get_template_part('template-parts/homepage/content', 'solutions');
    get_template_part('template-parts/homepage/content', 'websites');
    get_template_part('template-parts/homepage/content', 'mobile-apps');
    get_template_part('template-parts/homepage/content', 'branding');
    get_template_part('template-parts/homepage/content', 'technologies');
    get_template_part('template-parts/homepage/content', 'testimonials');
    get_template_part('template-parts/homepage/content', 'our-team');
    get_template_part('template-parts/homepage/content', 'blog-posts');
    ?>

</div>

<?php
get_footer();
?>
