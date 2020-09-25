<?php
get_header();
?>

<div class="blog">
    <section class="section light-bg blog-container" data-before="LEARNINGS">
        <div class="container">
            <div class="blog-header">
                <h1 class="blogHeader-title">Blog</h1>
                <p class="blogHeader-desc">
                    Here we share articles to help you decide better for your product.
                </p>
            </div>

            <div class="learning-container">
                <div class="lessons-container">
                    <?php
                    include(locate_template('template-parts/blog/content-posts.php', false, false));
                    ?>
                </div>
                <div class="pagination-container">
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>