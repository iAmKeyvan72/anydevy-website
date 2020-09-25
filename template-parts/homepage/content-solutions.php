<section
        id="sec-section"
        class="section second-section light-bg"
        data-before="SOLUTIONS"
>
    <div class="container">
        <?php

        $solutions = get_posts(array(
            'post_type' => 'solution',
            'numberposts' => 9
        ));


        foreach ($solutions as $solution) {

            $solutionID = $solution->ID;
            $solutionTitle = get_the_title($solutionID);
            $solutionIcon = get_field('archive_icon', $solutionID)['url'];
            $solutionURL = get_the_permalink($solutionID);

            ?>
            <div class="solution">
                <div class="solution-icon-box">
                    <a href="<?php echo $solutionURL ?>" title="<?php echo $solutionTitle ?>">
                        <img src="<?php echo $solutionIcon ?>"
                             alt="<?php echo $solutionTitle ?>"
                             class="solution-icon"/>
                    </a>
                </div>
                <a href="<?php echo $solutionURL; ?>" class="solution-title"
                   title="<?php echo $solutionTitle ?>">
                    <?php echo $solutionTitle ?>
                </a>
            </div>

            <?php
        }
        ?>
        <div class="solution">
            <a href="/solutions" class="see-more">See all solutions</a>
        </div>
    </div>
</section>