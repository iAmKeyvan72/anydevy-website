<section class="section servicesCard-section light-bg">
    <div class="container">
        <div class="serviceCard-container">
            <?php
            $args = array(
                'post_type' => 'solution'
            );
            $solutionPosts = new WP_Query($args);

            while ($solutionPosts->have_posts()) {
                $solutionPosts->the_post();

                $solutionTitle = get_the_title();
                $solutionIcon = get_field('archive_icon')['url'];
                $solutionURL = get_the_permalink();
                $solutionExcerpt = get_the_excerpt();
                ?>
                <div class="serviceCard">
                    <a href="<?php echo $solutionURL ?>" title="<?php echo $solutionTitle ?>">
                        <img src="<?php echo $solutionIcon ?>" alt="<?php echo $solutionTitle ?>"/>
                    </a>
                    <a href="<?php echo $solutionURL ?>" title="<?php echo $solutionTitle ?>">
                        <h2 class="see-more service-title"><?php echo $solutionTitle ?></h2>
                    </a>
                    <p class="service-description"><?php echo $solutionExcerpt ?></p>
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