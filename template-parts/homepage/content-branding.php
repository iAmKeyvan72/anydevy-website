<!--Desktop-->
<section
        class="section branding-section white-bg desktop"
        data-before="BRANDING"
>
    <div class="branding-container">
        <?php
        $brandings = get_posts(array(
            'post_type' => 'project',
            'numberposts' => 2,
            'meta_query' => array(
                array(
                    'key' => 'categories',
                    'value' => 'Branding',
                    'compare' => 'LIKE'
                )
            )
        ));

        $counter = 0;
        foreach ($brandings as $branding) {
            $brandingID = $branding->ID;
            $projectName = get_the_title($brandingID);
            $projectURL = get_the_permalink($brandingID);
            $projectImage = get_field('branding_featured_image', $brandingID)['url'];
            $projectYear = get_field('year', $brandingID);

            if ($counter % 2) {
                ?>
                <div class="left-brand" data-jarallax-element="100">
                    <div class="brand-text">
                        <a href="<?php echo $projectURL; ?>" class="brand-title" title="<?php echo $projectName ?>">
                            <?php echo $projectName ?>
                        </a>
                        <p class="brand-year"><?php echo $projectYear ?></p>
                    </div>
                    <div class="brand-image">
                        <a href="<?php echo $projectURL; ?>" title="<?php echo $projectName ?>">
                            <img
                                    src="<?php echo $projectImage ?>"
                                    alt="<?php echo $projectName ?>"
                            />
                        </a>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="right-brand" data-jarallax-element="-100">
                    <div class="brand-image">
                        <a href="<?php echo $projectURL; ?>" title="<?php echo $projectName ?>">
                            <img
                                    src="<?php echo $projectImage ?>"
                                    alt="<?php echo $projectName ?>"
                            />
                        </a>
                    </div>
                    <div class="brand-text">
                        <a href="<?php echo $projectURL; ?>" class="brand-title" title="<?php echo $projectName ?>">
                            <?php echo $projectName ?>
                        </a>
                        <p class="brand-year"><?php echo $projectYear ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="branding-works">
        <a class="see-more" href="/projects">See all works</a>
    </div>
</section>

<!--Mobile-->
<section
        class="section branding-section light-bg mobile"
        data-before="BRANDING"
>
    <div class="branding-container">

        <?php
        $counter = 0;
        foreach ($brandings as $branding) {
            $brandingID = $branding->ID;
            $projectName = get_the_title($brandingID);
            $projectURL = get_the_permalink($brandingID);
            $projectImage = get_field('branding_featured_image', $brandingID)['url'];
            $projectYear = get_field('year', $brandingID);

            if ($counter % 2) {
                ?>
                <div class="brand top-brand">
                    <div class="brand-text">
                        <a href="<?php echo $projectURL ?>" class="brand-title" title="<?php echo $projectName ?>">
                            <?php echo $projectName ?>
                        </a>
                        <p class="brand-year"><?php echo $projectYear ?></p>
                    </div>
                    <div class="brand-image">
                        <a href="<?php echo $projectURL ?>" title="<?php echo $projectName ?>">
                            <img
                                    src="<?php echo $projectImage ?>"
                                    alt="brand-image"
                            />
                        </a>
                    </div>
                </div>

                <?php
            } else {
                ?>
                <div class="brand bottom-brand">
                    <div class="brand-image">
                        <a href="<?php echo $projectURL ?>" title="<?php echo $projectName ?>">
                            <img
                                    src="<?php echo $projectImage ?>"
                                    alt="brand-image"
                            />
                        </a>
                    </div>
                    <div class="brand-text">
                        <a href="<?php echo $projectURL ?>" class="brand-title" title="<?php echo $projectName ?>">
                            <?php echo $projectName ?>
                        </a>
                        <p class="brand-year"><?php echo $projectYear ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="branding-works">
        <a class="see-more" href="/projects">See all works</a>
    </div>
</section>