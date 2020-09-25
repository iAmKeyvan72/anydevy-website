<section class="postNav-container">
    <?php
    if ($prevPost) {
        ?>
        <div class="previous-post">
            <a href="/<?php echo $prevPost->post_name ?>" title="<?php echo $prevPost->post_title ?>">
                <img src="<?php echo get_the_post_thumbnail_url($prevPost->ID) ?>"
                     alt="<?php echo $prevPost->post_title ?>"/>
            </a>
            <div class="post-desc">
                <p class="post-nav">Previous post</p>
                <a href="/<?php echo $prevPost->post_name ?>" class="post-title"
                   title="<?php echo $prevPost->post_title ?>"><?php echo $prevPost->post_title ?></a>
            </div>
        </div>
        <?php
    }
    if ($nextPost) {
        ?>
        <div class="next-post">
            <a href="/<?php echo $nextPost->post_name ?>" title="<?php echo $nextPost->post_title ?>">
                <img src="<?php echo get_the_post_thumbnail_url($nextPost->ID) ?>"
                     alt="<?php echo $nextPost->post_title ?>"/>
            </a>
            <div class="post-desc">
                <p class="post-nav">Next post</p>
                <a href="/<?php echo $nextPost->post_name ?>" class="post-title"
                   title="<?php echo $nextPost->post_title ?>"><?php echo $nextPost->post_title ?>
                </a>
            </div>
        </div>
        <?php
    }
    ?>
</section>