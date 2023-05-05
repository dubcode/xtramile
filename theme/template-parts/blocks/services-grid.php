<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$services = get_field('services');
$bg = get_field('bg_overflow_colour');
?>
<!-- BLOCK - SERVICES -->
<section class="services-wrapper" style="background: <?php echo $bg; ?>;">
    <span class="services__bg-title">
        <span class="scroll-in-right" data-top-bottom="right: 0" data-bottom-top="right: 50%">
            Services
        </span>
    </span>
    <div class="services">
        <div class="container">
            <div class="services__intro">
                <h3 class="services__title">
                    <?php echo $title; ?>
                </h3>
                <?php echo $excerpt; ?>
            </div>
            <div class="services__grid">
                <ul>
                    <?php
                    foreach( $services as $service ) {
                        $title = $service['title'];
                        $excerpt = $service['excerpt'];
                        $button_url = $service['button_url'];
                        $background_image = $service['background_image'];
                    ?>

                    <li class="services__grid-item">
                        <a href="<?php echo $button_url; ?>">
                            <?php 
                            if( !empty( $background_image ) ): ?>
                                <img src="<?php echo esc_url($background_image['sizes']['tall']); ?>" class="services__grid-item-bg" alt="<?php echo esc_attr($background_image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="services__grid-item-excerpt">
                                <?php echo $excerpt; ?>
                            </div>
                            <div class="services__grid-item-title">
                                <div>
                                    <span><?php echo $title; ?></span>
                                    <span class="services__grid-spacer"></span>
                                    <div class="services__grid-icon">
                                        <svg
                                            x="0px"
                                            y="0px"
                                            viewBox="0 0 62 55.7"
                                            style="enable-background: new 0 0 62 55.7;"
                                            xml:space="preserve"
                                        >
                                            <path class="st0" d="M42.8,1H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2C47.2,2.2,45.1,1,42.8,1" />
                                            <path class="st1" d="M34.5,20.3c-0.4,0.4-0.4,1.1,0,1.5l4.8,4.8H21c-0.6,0-1,0.5-1,1 s0.5,1,1,1h18.3l-4.8,4.8c-0.4,0.4-0.4,1.1,0,1.5c0.4,0.4,1.1,0.4,1.4,0l6.5-6.6l0,0c0.1-0.1,0.2-0.2,0.2-0.3 c0.1-0.1,0.1-0.3,0.1-0.4c0-0.3-0.1-0.5-0.3-0.7L36,20.3C35.6,19.9,35,19.9,34.5,20.3C34.5,20.3,34.5,20.3,34.5,20.3z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php }; ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <script>
    function createSlider() {
        var sliderThree = tns({
            container: '.services__grid ul',
            items: 1,
            slideBy: 1,
            autoplay: false,
            speed: 500, // Duration of the animation in milliseconds
            animateIn: 'easeInOutQuart', // Easing function
            autoplayButtonOutput: false, // Disable start stop
            controls: false, // Disable the default controls
            nav: false, // Disable the default nav,
            disable: false,
            responsive: {
                1280: {
                    disable: true
                }
            }
        });
        }

        document.addEventListener('DOMContentLoaded', function() {
            createSlider();
        });

</script>
</section>