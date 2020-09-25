<section
        class="section othersSiad-section dark-bg"
        data-before="OTHERS SAID"
>
    <div class="container">
        <div class="desktop">
            <div class="comments-carousel owl-carousel owl-theme">

                <?php
                $reviews = get_posts(
                    array(
                        'post_type' => 'testimonial',
                        'numberposts' => 3
                    )
                );

                foreach ($reviews

                         as $review) {
                    $reviewID = $review->ID;
                    $reviewerName = get_the_title($reviewID);
                    $reviewerImage = get_the_post_thumbnail_url($reviewID);
                    $reviewMessage = get_the_content(null, null, $reviewID);
                    $reviewerPosition = get_field('position', $reviewID);
                    ?>
                    <div class="comment-box">
                        <div class="user-icon-box">
                            <img class="user-icon" src="<?php echo $reviewerImage ?>"
                                 alt="<?php echo $reviewerName; ?>"/>
                        </div>
                        <div class="comment">
                            <p class="user-name"><?php echo $reviewerName; ?></p>
                            <p class="user-job see-more"><?php echo $reviewerPosition ?></p>
                            <p class="comment-text"><?php echo $reviewMessage ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
        <div class="mobile">
            <div class="comments-mobile-carousel owl-carousel owl-theme">
                <?php
                foreach ($reviews
                         as $review) {
                    $reviewID = $review->ID;
                    $reviewerName = get_the_title($reviewID);
                    $reviewerImage = get_the_post_thumbnail_url($reviewID);
                    $reviewMessage = get_the_content(null, null, $reviewID);
                    $reviewerPosition = get_field('position', $reviewID);
                    ?>
                    <div class="comment-box">
                        <div class="comment">
                            <div class="user-icon-box">
                                <img class="user-icon" src="<?php echo $reviewerImage ?>"
                                     alt="<?php echo $reviewerName ?>"/>
                            </div>
                            <div>
                                <p class="user-name"><?php echo $reviewerName ?></p>
                                <p class="user-job see-more"><?php echo $reviewerPosition ?></p>
                            </div>
                        </div>
                        <p class="comment-text"><?php echo $reviewMessage ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>