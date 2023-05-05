<?php
$slides = get_field('slides');
?>
<!-- TEMPLATE - LOOPER -->
<section class="looper">
    <div class="looper__inner container">
        <h2 class="looper__bg-title">
            <span class="scroll-in-left" data-top-bottom="left: 0" data-bottom-top="left: 50%">
                Our Work
            </span>
        </h2>
        <div class="looper__left">
            <div class="looper__excerpt-wrapper">

                <!-- looper excerpts slider -->
                <div class="looper__excerpts">

                    <?php
                    foreach( $slides as $slide ) {
                        $title = $slide['title'];
                        $sub_title = $slide['sub_title'];
                        $number = $slide['number'];
                        $excerpt = $slide['excerpt'];
                        $button_label = $slide['button_label'];
                        $button_url = $slide['button_url'];
                    ?>   
                    <div class="looper__excerpt">
                        <div>
                            <span class="looper__title">
                                <?php echo $title; ?>
                            </span>
                            <span class="looper__sub-title">
                                <span>
                                    <?php echo $number; ?>
                                </span> 
                                <?php echo $sub_title; ?>
                            </span>
                            <?php echo $excerpt; ?>
                            <span class="looper__excerpt-spacer"></span>
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
                            <span class="looper__excerpt-spacer"></span>
                        </div>
                    </div>
                    <?php }; ?>

                </div>

                <!-- looper controls -->
                <ul class="looper__slider-controls" id="customize-controls" aria-label="Slider Navigation" tabindex="0">
                    <li class="looper__slider-control-button prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                        <svg
                            x="0px"
                            y="0px"
                            viewBox="0 0 62 55.7"
                            style="enable-background: new 0 0 62 55.7;"
                            xml:space="preserve"
                        >
                            <path class="st0" d="M19.2,54.7h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2 c-1.1-2-3.3-3.2-5.5-3.2H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4C14.8,53.5,16.9,54.7,19.2,54.7"/>
                            <path class="st1" d="M27.5,35.4c0.4-0.4,0.4-1.1,0-1.5l-4.8-4.8H41c0.6,0,1-0.5,1-1 c0-0.6-0.5-1-1-1H22.7l4.8-4.8c0.4-0.4,0.4-1.1,0-1.5c-0.4-0.4-1.1-0.4-1.4,0l-6.5,6.6l0,0c-0.1,0.1-0.2,0.2-0.2,0.3 c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.3,0.1,0.5,0.3,0.7l6.5,6.6C26.4,35.8,27,35.8,27.5,35.4C27.5,35.4,27.5,35.4,27.5,35.4z"/>
                        </svg>
                    </li>
                    <li class="looper__slider-control-button next" data-controls="next" aria-controls="customize" tabindex="-1">
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
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- looper image slider -->
    <div class="looper__slider">
        <div class="looper__wrapper">

        <?php foreach( $slides as $slide ) {
            $screen = $slide['screen'];
        ?>
            <div class="looper__slide" style="background: url('<?php echo $screen['sizes']['looper']; ?>') no-repeat center center; background-size: cover;"></div>

        <?php }; ?>
        
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // If screen width is greater than or equal to 1280px, create sliderOne with config options
        var sliderOne = tns({
            container: '.looper__wrapper',
            items: 1,
            slideBy: 1,
            autoplay: false,
            speed: 500, // Duration of the animation in milliseconds
            animateIn: 'easeInOutQuart', // Easing function
            controlsContainer: '#customize-controls',
            autoplayButtonOutput: false, // Disable start stop
            controls: false, // Disable the default controls
            nav: false // Disable the default nav
        });

        // slider 2 config
        var sliderTwo = tns({
        container: '.looper__excerpts',
        items: 1,
        slideBy: 1,
        axis: 'vertical',
        autoplay: false,
        speed: 500, // Duration of the animation in milliseconds
        animateIn: 'easeInOutQuart', // Easing function
        controlsContainer: '#customize-controls',
        autoplayButtonOutput: false, // Disable start stop
        controls: false, // Disable the default controls
        nav: false // Disable the default nav
        });

        // define custom controls
        var prevButton = document.querySelector('.looper__slider-controls .prev');
        var nextButton = document.querySelector('.looper__slider-controls .next');

        // prev button config
        prevButton.addEventListener('click', function() {
        setTimeout(function() {
            if (sliderOne) {
            sliderOne.goTo('prev');
            }
        }, 100); // Add a 200ms delay
        sliderTwo.goTo('prev');
        });

        // next button config
        nextButton.addEventListener('click', function() {
        setTimeout(function() {
            if (sliderOne) {
            sliderOne.goTo('next');
            }
        }, 100); // Add a 200ms delay
        sliderTwo.goTo('next');
        });

    });
    </script>
</section>