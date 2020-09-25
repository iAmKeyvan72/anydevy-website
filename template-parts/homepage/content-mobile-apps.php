<section class="section fourth-section dark-bg" data-before="MOBILE APP">
<!--    Desktop-->
    <div class="desktop">
        <div class="mobile-carousel owl-carousel owl-theme">
            <?php
            $apps = get_posts(array(
                    'post_type' => 'project',
                    'numberposts' => 8,
                    'meta_query' => array(
                        array(
                            'key' => 'categories',
                            'value' => '"Mobile App"',
                            'compare' => 'LIKE'
                        )
                    )
                )
            );
            foreach ($apps as $app) {
                $appID = $app->ID;
                $projectName = get_the_title($appID);
                $projectURL = get_the_permalink($appID);
                $projectImage = get_field('mobile_app_featured_image', $appID)['url'];
                ?>

                ?>
                <div class="mobile-app-item">
                    <div class="mobile-slider-items">
                        <a href="<?php echo $projectURL; ?>" title="<?php echo $projectName; ?>">
                            <p class="mobile-app-title"><?php echo $projectName; ?></p>
                        </a>
                        <img src="<?php echo $projectImage; ?>" alt="<?php echo $projectName; ?>"/>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>


<!--    Mobile-->
    <div class="mobile">
        <div class="mobile-app-box">

            <?php
            $counter = 0;
            foreach ($apps as $app) {
                $appID = $app->ID;
                $projectName = get_the_title($appID);
                $projectURL = get_the_permalink($appID);
                $projectImage = get_field('mobile_app_featured_image', $appID)['url'];
                if ($counter % 2) {
                    ?>
                    <div class="left-col">
                        <img
                                class="mobile-app"
                                src="<?php echo $projectImage ?>"
                                alt="<?php echo $projectName ?>"
                        />
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="right-col">
                        <img
                                class="mobile-app"
                                src="<?php echo $projectImage ?>"
                                alt="<?php echo $projectName ?>"
                        />
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>