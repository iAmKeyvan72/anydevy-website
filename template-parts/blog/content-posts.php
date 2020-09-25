<?php
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

while (have_posts()) {
    the_post();

    $postImage = get_the_post_thumbnail_url();
    $postTitle = get_the_title();
    $postExcerpt = get_the_excerpt();
    $postTags = get_the_tags();
    $postDate = get_the_date();
    $postURL = get_the_permalink();

    ?>
    <div class="lesson-box">
        <a href="<?php echo $postURL ?>" title="<?php echo $postTitle ?>">
            <img class="lesson-img" src="<?php echo $postImage ?>"
                 alt="<?php echo $postTitle ?>"/>
        </a>
        <div class="lesson-contents">
            <a href="<?php echo $postURL ?>" title="<?php echo $postTitle ?>">
                <h2 class="lesson-title"><?php echo $postTitle ?></h2>
            </a>
            <div class="lesson-details">
                <p class="lesson-tag"><?php echo showTags($postTags) ?></p>
                <p class="lesson-date"><?php echo $postDate; ?></p>
            </div>
            <p class="lesson-desc"><?php echo $postExcerpt ?></p>

            <a href="<?php echo $postURL ?>" title="<?php echo $postTitle ?>"
               class="see-more lesson-readMore">Read more</a>
        </div>
    </div>
    <?php
}
?>

