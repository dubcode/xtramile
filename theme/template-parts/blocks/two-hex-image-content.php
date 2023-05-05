<?php
$title = get_field('title');
$excerpt = get_field('excerpt', false, false);
$image_one = get_field('image_one');
$image_two = get_field('image_two');
$button_label = get_field('button_label');
$button_url = get_field('button_url');
$style = get_field('style');
?>
<!-- BLOCK - THIC -->
<section class="thic <?php echo $style; ?>">
    <div class="container">
        <div class="thic__grid">
            <div class="thic__content">
                <?php if( $title ): ?>
                    <h4 class="thic__title">
                        <?php echo $title; ?>
                    </h4>
                <?php endif; 
                if( $excerpt ): 
                    echo $excerpt;
                endif; 
                if( $button_label): ?>
                    <!-- button -->
                    <a class="cta grey__button" href="<?php echo $button_url; ?>">
                        <svg
                            x="0px"
                            y="0px"
                            viewBox="0 0 281.3 54.7"
                            style="enable-background:new 0 0 281.3 54.7;"
                            xml:space="preserve"
                        >
                            <path d="M262.6,0.5h-8H30.5H18.7c-2.3,0-4.4,1.2-5.5,3.2L1.4,24.1c-1.1,2-1.1,4.4,0,6.4L13.2,51 c1.1,2,3.3,3.2,5.5,3.2h11.1h224.8h8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L268.1,3.7C267,1.7,264.9,0.5,262.6,0.5" />
                        </svg>
                        <div class="cta-label">
                            <span>
                                <?php echo $button_label; ?>
                            </span>
                        </div>
                    </a>
                <?php endif; 
                if( !empty( $image_one ) ): ?>
                    <img src="<?php echo esc_url($image_one['sizes']['big']); ?>" class="scroll-in-up" alt="<?php echo esc_attr($image_one['alt']); ?>" data-top-bottom="top: -30%" data-bottom-top="top: 30%" />
                    <!-- svg bg -->
                    <div class="thic__icon">
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
                <?php endif; ?>
            </div>
            <div class="thic__hero">
                <div class="scroll-in-up" data-top-bottom="top: -12.5%" data-bottom-top="top: 12.5%">
                <?php 
                if( !empty( $image_two ) ): ?>
                    <img src="<?php echo esc_url($image_two['sizes']['bigger']); ?>" alt="<?php echo esc_attr($image_two['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>