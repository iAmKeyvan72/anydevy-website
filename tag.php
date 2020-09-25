<?php
get_header();

$tagDescription = get_the_archive_description() ? get_the_archive_description() : 'Here we share articles to help you decide better for your product.';

?>

<div class="blog">
    <section class="section light-bg blog-container" data-before="<?php echo single_tag_title(); ?>">
        <div class="container">
            <div class="blog-header">
                <h1 class="blogHeader-title"><?php echo single_tag_title(); ?></h1>
                <p class="blogHeader-desc">
                   <?php echo $tagDescription ?>
                </p>
            </div>

            <div class="learning-container">
                <div class="lessons-container">
                    <?php
                    include(locate_template('template-parts/blog/content-posts.php', false, false));
                    ?>
                </div>
                <div class="pageination-container">
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
