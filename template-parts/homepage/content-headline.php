<section
        class="section first-section dark-bg"
        data-before=""
        data-Mobilebefore=""
>
    <div class="welcome container">
        <div class="welcome-text-container">
            <p class="welcome-text welcome-hi">Hi!</p>
            <p class="welcome-text welcome-desc">
                We're here to help
                <br/>
                your idea for its
            </p>
            <div class="welcome-text welcome-desc slider-text">
                <p id="welcome-slider-text" class="desktop"></p>
                <div class="slider-timer desktop" id="welcome-slider-timer"></div>
                <p id="welcome-mobile-slider-text" class="mobile"></p>
                <div
                        class="slider-timer mobile"
                        id="welcome-mobile-slider-timer"
                ></div>
            </div>
            <a href="#" class="btn welcome-btn btn-pink"> Lets Start </a>
        </div>

        <!--        Desktop Carousel-->
        <div class="welcome-slider">
            <div class="welcome-carousel-box">
                <div id="" class="welcome-carousel owl-carousel theme-default">
                    <?php

                    $services = get_posts(array(
                        'post_type' => 'service',
                        'numberposts' => -1
                    ));

                    foreach ($services as $service) {
                        $serviceID = $service->ID;
                        $serviceTitle = get_the_title($serviceID);
                        $serviceURL = get_the_permalink($serviceID);
                        $serviceImage = get_the_post_thumbnail_url($serviceID);
                        ?>
                        <div class="welcome-item" data-value="<?php echo $serviceTitle ?>">
                            <a href="<?php echo $serviceURL; ?>" title="<?php echo $serviceTitle ?>">
                                <img src="<?php echo $serviceImage ?>" alt="<?php echo $serviceTitle ?>"/>
                            </a>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!--        Mobile Carousel-->
        <div class="welcome-mobile-slider">
            <div class="welcome-mobile-carousel-box">
                <div
                        id=""
                        class="welcome-mobile-carousel owl-carousel theme-default"
                >
                    <?php
                    foreach ($services as $service) {
                        $serviceID = $service->ID;
                        $serviceTitle = get_the_title($serviceID);
                        $serviceURL = get_the_permalink($serviceID);
                        $serviceImage = get_the_post_thumbnail_url($serviceID);
                        ?>
                        <div class="welcome-item" data-value="<?php echo $serviceTitle ?>">
                            <a href="<?php echo $serviceURL; ?>" title="<?php echo $serviceTitle ?>">
                                <img src="<?php echo $serviceImage ?>" alt="<?php echo $serviceTitle ?>"/>
                            </a>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
