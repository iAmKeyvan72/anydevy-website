<section class="section ourTeam-section white-bg" data-before="OUR TEAM">
    <div class="team-container">

        <?php
        $members = get_posts(
            array(
                'post_type' => 'team_member'
            )
        );

        foreach ($members

                 as $member) {

            $memberID = $member->ID;
            $memberName = get_the_title($memberID);
            $memberImage = get_the_post_thumbnail_url($memberID);
            $memberPosition = get_field('position', $memberID);
            $memberHoverImage = get_field('hovered_image', $memberID)['url'];
            $memberBackgroundColor = get_field('background_color', $memberID);
            ?>
            <div class="teamMate-container opacity0 <?php echo $memberBackgroundColor ?>">
                <img
                        src="<?php echo $memberImage ?>"
                        alt="<?php echo $memberName ?>"
                        data-alt-src="<?php echo $memberHoverImage ?>"
                />
                <p class="teamMate-name"><?php echo $memberName ?></p>
                <p class="teamMate-job see-more"><?php echo $memberPosition ?></p>
            </div>
            <?php
        }
        ?>


        <div class="joinTeam-container opacity0 white-bg">
            <p class="teamMate-freePo">Here would be yours :]</p>
            <a href="javascript:void(0)" class="teamMate-Join see-more"
            >Join our team</a
            >
        </div>
    </div>
</section>