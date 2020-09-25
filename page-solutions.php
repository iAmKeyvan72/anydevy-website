<?php
get_header();

$pageTitle = get_the_title();
$pageSlogan = get_field('slogan');
$pageDescription = get_field('description');
$pageContent = get_the_content();

?>

<div class="services">

    <?php
    include(locate_template('template-parts/solutions/content-headline.php', false, false));
    get_template_part('template-parts/solutions/content', 'solutions-list');
    include(locate_template('template-parts/solutions/content-description.php', false, false));
    ?>

</div>

<?php
get_footer();
?>
