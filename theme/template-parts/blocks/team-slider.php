<?php
$title = get_field('title');
$slides = get_field('team_members');
?>
<section class="team-block">
    <div class="container">
        <h3 class="team-block__title"><?php echo $title; ?></h3>
        <div class="team-block__slider relative">
            <ul class="team-block__members">
                <?php foreach( $slides as $slide ) { 
                    $name = $slide['name'];
                    $occupation = $slide['occupation'];
                    $excerpt = $slide['excerpt'];
                    $image = $slide['image'];
                ?>
                <li>
                    <div class="team-slider__member">
                        <div class="team-slider__thumbnail">
                            <div class="team-slider__mask">
                                <?php 
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['sizes']['hex']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="team-slider__content">
                            <div>
                                <div class="team-slider__title">
                                    <?php echo $name; ?>
                                </div>
                                <div class="team-slider__excerpt">
                                    <?php echo $excerpt; ?>
                                </div>
                            </div>
                            <div class="team-slider__after">
                                <svg x="0px" y="0px" viewBox="0 0 21.3 55" style="enable-background:new 0 0 21.3 55;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <defs>
                                                <rect id="SVGID_3_" x="0" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 21.2824 55)" width="21.3" height="55"/>
                                            </defs>
                                            <clipPath id="SVGID_4_">
                                                <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                            </clipPath>
                                            <path id="Path_25" class="st0" d="M-241.1,54.4h8H-9H2.8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L8.3,3.9 C7.2,1.9,5,0.7,2.8,0.7H-8.3h-224.8h-8c-2.3,0-4.4,1.2-5.5,3.2l-11.8,20.4c-1.1,2-1.1,4.4,0,6.4l11.8,20.5 C-245.5,53.2-243.4,54.4-241.1,54.4" fill="#4C5454" stroke="#4C5454"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </li>
                <?php }; ?>
            </ul>
            <!-- team-block controls -->
            <div class="team-block__controls">
                <div class="container relative">
                    <ul class="team-block__slider-controls" id="customize-controls" aria-label="Slider Navigation" tabindex="0">
                        <li class="team-block__slider-control-button prev" data-controls="prev" aria-controls="customize" tabindex="-1">
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
                        <li class="team-block__slider-control-button next" data-controls="next" aria-controls="customize" tabindex="-1">
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
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // If screen width is greater than or equal to 1280px, create teamSlider with config options
        var teamSlider = tns({
            container: '.team-block__members',
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

        // define custom controls
        var prevButton = document.querySelector('.team-block__slider-controls .prev');
        var nextButton = document.querySelector('.team-block__slider-controls .next');

        // prev button config
        prevButton.addEventListener('click', function() {
        setTimeout(function() {
            if (teamSlider) {
            teamSlider.goTo('prev');
            }
        }, 100); // Add a 200ms delay
        sliderTwo.goTo('prev');
        });

        // next button config
        nextButton.addEventListener('click', function() {
        setTimeout(function() {
            if (teamSlider) {
            teamSlider.goTo('next');
            }
        }, 100); // Add a 200ms delay
        sliderTwo.goTo('next');
        });

    });
    </script>
</section>