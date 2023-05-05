<?php
$stat_title = get_field('stat_title');
$stat_excerpt = get_field('stat_excerpt', false, false);
$content = get_field('content', false, false);
?>

<!-- BLOCK - FEATURE ONE -->
<section class="hxsc">
    <div class="hxsc__hex-one">
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
    <div class="hxsc__hex-two">
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
        <div class="hxsc__grid">
            <div class="hxsc__content hxsc__col">
                <div>
                    <div class="hxsc__stat">
                        <div class="hxsc__stat__icon">
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
                        <div class="hxsc__stat__list-inner">
                            <div class="hxsc__stat__list-content">
                                <div class="block w-full px-2">
                                    <span class="hxsc__stat__list-title">
                                        <?php echo $stat_title; ?>
                                    </span>
                                    <?php echo $stat_excerpt; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hxsc__col">
                <?php echo $content; ?>
            </div> 
        </div>

    </div>
</section>