<?php
    $title = get_field('title');
    $excerpt = get_field('excerpt');
    $style = get_field('style');
    $image = get_field('image');
    $list_one_title = get_field('list_one_title');
    $list_two_title = get_field('list_two_title');
?>
<section class="tcchi <?php echo $style; ?>">
    <div class="container tcchi__inner">
        <!-- svg bg -->
        <div class="tcchi__icon">
            <svg
                x="0px"
                y="0px"
                viewBox="0 0 62 55.7"
                style="enable-background: new 0 0 62 55.7;"
                xml:space="preserve"
            >
                <path class="st0" d="M42.8,1H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2C47.2,2.2,45.1,1,42.8,1" />
            </svg>
        </div>
        <div class="tcchi__grid">
            <!-- grid col one -->
            <div class="tcchi__grid-col tcchi__col-one">
                <div class="tcchi__mask">
                <?php 
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['sizes']['big-hex']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
            <!-- grid col two -->
            <div class="tcchi__grid-col tcchi__col-two">
                <div class="tcchi__grid-content">
                    <span class="tcchi__grid-title">
                        <?php echo $title; ?>
                    </span>
                    <div class="tcchi__grid-excerpt">
                        <?php echo $excerpt; ?>
                    </div>
                    <div class="tcchi__lists">
                        <div class="tcchi__list">
                            <!-- list one -->
                            <?php if( $list_one_title ) { ?>
                                <span class="tcchi__list-title">
                                    <?php echo $list_one_title; ?>
                                </span>
                            <?php }; ?>
                            <?php if( have_rows('items') ): ?>
                            <ul>
                                <?php while( have_rows('items') ): the_row(); 
                                $label = get_sub_field('label');
                                ?>
                                    <li>
                                        <?php echo $label; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <div class="tcchi__list">
                            <!-- list two -->
                            <?php if( $list_two_title ) { ?>
                                <span class="tcchi__list-title">
                                    <?php echo $list_two_title; ?>
                                </span>
                            <?php }; ?>
                            <?php if( have_rows('items_two') ): ?>
                            <ul>
                                <?php while( have_rows('items_two') ): the_row(); 
                                $label = get_sub_field('label');
                                ?>
                                    <li>
                                        <?php echo $label; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>