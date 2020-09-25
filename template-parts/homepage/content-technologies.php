<section
        class="section technology-section light-bg"
        data-before="TECHNOLOGIES"
>
    <div class="technologies-container">
        <p class="technologies-promo">
            Here are technologies that we are capable to make your ideal product
        </p>
        <div class="technologies">

            <?php

            $techs = get_posts(
                array(
                    'post_type' => 'technology',
                    'numberposts' => -1
                )
            );

            foreach ($techs as $tech) {
                $techID = $tech->ID;
                $technologyTitle = get_the_title($techID);
                $technologyImage = get_the_post_thumbnail_url($techID);

                ?>
                <img src="<?php echo $technologyImage ?>"
                     alt="<?php echo $technologyTitle ?>"/>
                <?php
            }
            ?>
        </div>
    </div>
</section>