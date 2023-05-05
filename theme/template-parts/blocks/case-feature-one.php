<?php
$title = get_field('title');
$excerpt = get_field('excerpt', false, false);
$image = get_field('image');
$style = get_field('style');
?>

<!-- BLOCK - FEATURE ONE -->
<section class="csfo csfo-<?php echo $style; ?>">
    <div class="csfo__hex-one">
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
    <div class="csfo__hex-two">
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
    <div class="container">
        <div class="csfo__grid">
            <div class="csfo__content csfo__col">
                <div class="block w-full">
                    <span class="csfo__title">
                        <?php echo $title; ?>
                    </span>
                    <div class="csfo__excerpt">
                        <?php echo $excerpt; ?>
                    </div>
                </div>
            </div>
            <div class="csfo__hero csfo__col">
                <?php 
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['sizes']['default']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div> 
        </div>

    </div>
</section>