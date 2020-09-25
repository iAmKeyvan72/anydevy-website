<section class="section servicesCard-section light-bg">
    <div class="container">
        <div class="serviceCard-container">
            <?php
            $args = array(
                'post_type' => 'service'
            );
            $servicePosts = new WP_Query($args);

            while ($servicePosts->have_posts()) {
                $servicePosts->the_post();

                $serviceTitle = get_the_title();
                $serviceIcon = get_field('archive_icon')['url'];
                $serviceURL = get_the_permalink();
                $serviceExcerpt = get_the_excerpt();
                ?>
                <div class="serviceCard">
                    <a href="<?php echo $serviceURL ?>" title="<?php echo $serviceTitle ?>">
                        <img src="<?php echo $serviceIcon ?>" alt="<?php echo $serviceTitle ?>"/>
                    </a>
                    <a href="<?php echo $serviceURL ?>" title="<?php echo $serviceTitle ?>">
                        <h2 class="see-more service-title"><?php echo $serviceTitle ?></h2>
                    </a>
                    <p class="service-description"><?php echo $serviceExcerpt ?></p>
                </div>
                <?php
            }
            wp_reset_query();
            ?>
        </div>
        <div class="services-btn">
            <a class="btn btn-pink" href="#footer">Get Free Quote Now</a>
        </div>
    </div>
</section>