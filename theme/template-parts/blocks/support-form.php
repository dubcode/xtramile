<?php
$title = get_field('title');
$excerpt = get_field('excerpt', false, false);
$image_one = get_field('image_one');
$image_two = get_field('image_two');
?>

<!-- BLOCK - SUPPORT FORM -->
<section class="support__form">
    <div class="container">
        <div class="sf__hex-one">
            <svg
                x="0px"
                y="0px"
                viewBox="0 0 62 55.7"
                style="enable-background: new 0 0 62 55.7;"
                xml:space="preserve"
            >
                <path class="st0" d="M42.8,1H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2C47.2,2.2,45.1,1,42.8,1" fill="" />
            </svg>
        </div>
        <div class="sf__hex-two">
            <svg
                x="0px"
                y="0px"
                viewBox="0 0 62 55.7"
                style="enable-background: new 0 0 62 55.7;"
                xml:space="preserve"
            >
                <path class="st0" d="M42.8,1H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2C47.2,2.2,45.1,1,42.8,1" fill="" />
            </svg>
        </div>
        <div class="sf__mask-one">
            <?php 
            if( !empty( $image_one ) ): ?>
                <img src="<?php echo esc_url($image_one['sizes']['big-hex']); ?>"  alt="<?php echo esc_attr($image_one['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="sf__mask-two">
            <?php 
            if( !empty( $image_two ) ): ?>
                <img src="<?php echo esc_url($image_two['sizes']['big-hex']); ?>"  alt="<?php echo esc_attr($image_two['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="support__grid">
            <div class="support__content support__col">
                <h1 class="support__title">
                    <?php echo $title; ?>
                </h1>
                <div class="support__excerpt">
                    <?php echo $excerpt; ?>
                </div>
            </div>
            <div class="support__ninja support__col">
                <?php echo do_shortcode( '[ninja_form id=2]' ); ?>
            </div>
        </div>
    </div>
</section>