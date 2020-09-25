<?php
get_header();

function showTags($tags)
{
    $separator = ' | ';
    if (!empty($tags)) {
        foreach ($tags as $tag) {
            $output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
        }
        return trim($output, $separator);
    }
}

$postImage = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$postContent = get_the_content();
$postTags = get_the_tags();
$postDate = get_the_date();
$postURL = get_the_permalink();
$nextPost = get_next_post();
$prevPost = get_previous_post();

?>

    <div class="single-blog">
        <section class="singleBlog-banner">
            <img src="<?php echo $postImage ?>" alt="<?php echo $postTitle; ?>"/>
        </section>
        <section class="section singleBlog-container light-bg">
            <div class="container">

                <?php
                include(locate_template('template-parts/blogPost/content-blog-content.php', false, false));
                get_template_part('template-parts/blogPost/content', 'ctr');
                include(locate_template('template-parts/blogPost/content-pagination.php', false, false));
                ?>

                <section class="section postComment-container" data-before="TALK TO US">
                    <?php
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                    ?>
                </section>


            </div>
        </section>
    </div>

<?php
get_footer()
?>