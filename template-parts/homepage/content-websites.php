<!--Desktop-->
<section
        class="section third-section white-bg desktop"
        data-before="WEBSITES"
>
    <div class="container">
        <div class="third-section-left">
            <span class="small-circle"></span>
            <div class="website-carousel owl-carousel owl-theme">

                <?php
                $websites = get_posts(array(
                        'post_type' => 'project',
                        'numberposts' => 4,
                        'meta_query' => array(
                            array(
                                'key' => 'categories',
                                'value' => '"Website"',
                                'compare' => 'LIKE'
                            )
                        )
                    )
                );

                foreach ($websites as $website) {

                    $projectID = $website->ID;
                    $projectName = get_the_title($projectID);
                    $projectImage = get_field('website_featured_image', $projectID)['url'];
                    $projectYear = get_field('year', $projectID);
                    $projectURL = get_the_permalink($projectID);
                    ?>

                    <div
                            class="website-img"
                            data-webName="<?php echo $projectName; ?>"
                            data-year="<?php echo $projectYear; ?>"
                    >
                        <img src="<?php echo $projectImage; ?>"/>
                    </div>

                    <?php
                }
                ?>
            </div>

            <div class="website-details">
                <p class="website-title" id="web-title">Ad Agancy Website</p>
                <p class="website-year" id="web-year">2016</p>

                <div>
                    <a href="/projects" class="see-more">See all works</a>
                </div>
            </div>
        </div>

        <div class="third-section-right">
            <span class="big-circle"></span>
            <div class="larger-image">
                <img
                        id="larger-img"
                        src="http://placehold.it/350x300?text=6"
                        alt=""
                />
            </div>
        </div>
    </div>
</section>

<!--Mobile-->
<section
        class="section third-section white-bg mobile"
        data-before="WEBSITES"
>
    <div>
        <span class="small-circle"></span>
        <span class="big-circle"></span>
        <div class="website-mobile-carousel owl-carousel owl-theme">

            <?php
            foreach ($websites as $website) {
                $projectID = $website->ID;
                $projectName = get_the_title($projectID);
                $projectImage = get_field('website_featured_image', $projectID)['url'];
                $projectYear = get_field('year', $projectID);
                $projectURL = get_the_permalink($projectID);
                ?>
                <div
                        class="website-img"
                        data-webName="<?php echo $projectName; ?>"
                        data-year="<?php echo $projectYear; ?>"
                >
                    <img src="<?php echo $projectImage; ?>"/>
                </div>
                <?php
            }
            ?>

        </div>

        <div class="website-details">
            <p class="website-title" id="web-mobile-title">Ad Agancy Website</p>
            <p class="website-year" id="web-mobile-year">2016</p>

            <div>
                <a href="/projects" class="see-more">See all works</a>
            </div>
        </div>
    </div>
</section>