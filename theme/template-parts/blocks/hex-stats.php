<?php
$title = get_field('title');
$excerpt = get_field('excerpt', false, false);
$hex_items = get_field('stats');
?>

<!-- BLOCK - HEX STATS -->
<section class="hex-stats__section">
    <div class="hex-stats__container container">

    <div class="hex-stats__bg">
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
        
        <div class="hex-stats">

            <!-- intro -->
            <div class="hex-stats__intro">
                <div class="hex-stats__header">
                    <span class="hex-stats__title">
                        <?php echo $title; ?>
                    </span>
                </div>
                <div class="hex-stats__excerpt">
                    <?php echo $excerpt; ?>
                </div>
            </div>

            <!-- stats -->
            <div class="hex-stats__stats">
                <ul>
                <?php
                    foreach( $hex_items as $item ) {
                        $item_title = $item['label'];
                        $item_excerpt = $item['excerpt'];
                        $item_colour = $item['colour'];
                ?>
                    <li class="hex-stats__<?php echo $item_colour; ?>">
                        <div class="hex-stats__icon">
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
                        <div class="hex-stats__list-inner">
                            <div class="hex-stats__list-content">
                                <div class="block w-full px-2">
                                    <span class="hex-stats__list-title">
                                        <?php echo $item_title; ?>
                                    </span>
                                    <?php echo $item_excerpt; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php }; ?>
                </ul>
            </div>
            
        </div>

    </div>
</section>