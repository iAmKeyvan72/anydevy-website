<section
        class="section learning-section light-bg"
        data-before="LEARNINGS"
>
    <div class="learning-container">
        <div class="learning-contents">
            <?php
            $posts = get_posts(array(
                    'numberposts' => 2
                )
            );

            foreach ($posts
                     as $post) {
                $postID = $post->ID;
                $postTitle = get_the_title($postID);
                $postExcerpt = get_the_excerpt($postID);
                $postImage = get_the_post_thumbnail_url($postID);
                $postURL = get_permalink($postID);

                ?>
                <div class="learning-item">
                    <a href="<?php echo $postURL ?>" title="<?php echo $postTitle ?>">
                        <img
                                src="<?php echo $postImage; ?>"
                                alt="<?php echo $postTitle ?>"
                        />
                    </a>
                    <div class="learning-info">
                        <a href="<?php echo $postURL ?>" title="<?php echo $postTitle ?>" class="learning-title">
                            <h3><?php echo $postTitle ?></h3>
                        </a>
                        <p class="learning-desc"><?php echo $postExcerpt ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="learning-blog">
            <a class="see-more" href="/blog"
            >Read all blog posts</a
            >
        </div>
    </div>
</section>
