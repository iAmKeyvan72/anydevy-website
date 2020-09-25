<?php
get_header();
?>

<div class="single-services">
    <?php

    $postTitle = get_the_title();
    $postSlogan = get_field('slogan');
    $postIcon = get_field('single_icon')['url'];
    $postContent = get_the_content();

    include(locate_template('template-parts/service/content-headline.php', false, false));
    include(locate_template('template-parts/service/content-description.php', false, false));
    ?>
</div>

<?php
get_footer();
?>
