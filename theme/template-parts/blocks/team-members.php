<?php
    $team_intro = get_field('team_intro');
    $team_excerpt = get_field('team_excerpt');
    $team_members = get_field('team_members');
?>
<section class="team-members">
    <div class="container team-members__inner">
        <!-- team intro -->
        <div class="team-members-intro">
            <div>
                <div class="team-members-content">
                    <span class="team__title">
                        <?php echo $team_intro; ?>
                    </span>
                    <div class="team__excerpt">
                        <?php echo $team_excerpt; ?>
                    </div>
                </div>
                <!-- team members -->
                <div class="team-members__grid">
                    <ul>
                    <?php foreach( $team_members as $team ) {
                        $name = $team['name'];
                        $occupation = $team['occupation'];
                        $headshot = $team['headshot'];
                        ?>
                        <li>
                            <div class="team-member">
                                <div>
                                    <div class="team-member__mask">
                                        <?php 
                                        if( !empty( $headshot ) ): ?>
                                            <img src="<?php echo esc_url($headshot['sizes']['square']); ?>"  alt="<?php echo esc_attr($headshot['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="team-member__info">
                                        <h3 class="team-member__name">
                                            <?php echo $name; ?>
                                        </h3>
                                        <p>
                                            <?php echo $occupation; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>