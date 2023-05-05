<?php
    $title = get_field('cta_title');
    $colour = get_field('cta_colour');
    $style = get_field('style');
    $background = get_field('background');
    $background_colour = get_field('background_colour');
?>
<div class="cta-btn__grid cta-btn__<?php echo $style; ?><?php if($background) { ?> cta__bg<?php } ?>" <?php if($background) { ?>style="background: url('<?php echo $background['sizes']['hero']; ?>') no-repeat center center; background-size: cover;"<?php } ?><?php if($background_colour) { ?>style="background: <?php echo $background_colour; ?>;"<?php } ?>>
    <div class="container">
        <div class="cta-btn">
            <div class="cta-btn__title" style="background: <?php echo $colour; ?>;">
                <span>
                    <?php echo $title; ?>
                </span>
                <?php if($style == "form") { ?>
                <div class="cta-form">
                    <?php echo do_shortcode( '[ninja_form id=3]' ); ?>
                </div>
                <?php }; ?>
            </div>
            <div class="cta-btn__after">
                <svg x="0px" y="0px" viewBox="0 0 21.3 55" style="enable-background:new 0 0 21.3 55;" xml:space="preserve">
                    <g>
                        <g>
                            <defs>
                                <rect id="SVGID_3_" x="0" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 21.2824 55)" width="21.3" height="55"/>
                            </defs>
                            <clipPath id="SVGID_4_">
                                <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                            </clipPath>
                            <path id="Path_25" class="st0" d="M-241.1,54.4h8H-9H2.8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L8.3,3.9 C7.2,1.9,5,0.7,2.8,0.7H-8.3h-224.8h-8c-2.3,0-4.4,1.2-5.5,3.2l-11.8,20.4c-1.1,2-1.1,4.4,0,6.4l11.8,20.5 C-245.5,53.2-243.4,54.4-241.1,54.4" fill="<?php echo $colour; ?>" stroke="<?php echo $colour; ?>"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>