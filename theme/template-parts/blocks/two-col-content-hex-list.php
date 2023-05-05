<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$hex_items = get_field('hex_list');
?>
<section class="two-cchl">
    <div class="container">
        <!-- BLOCK - Two Column Content & Hex List -->
        <div class="two-cchl__grid">
            <div class="two-cchl__grid-l two-cchl__col">
                <span class="two-cchl__grid-title">
                    <?php echo $title; ?>
</span>
                <?php echo $excerpt; ?>
            </div>
            <div class="two-cchl__grid-r two-cchl__col">
                <ul>
                <?php
                    foreach( $hex_items as $item ) {
                        $item_title = $item['title'];
                        $item_excerpt = $item['excerpt'];
                ?>
                    <li>
                        <div class="two-cchl__icon">
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
                        <div class="two-cchl__list-inner">
                            <div class="two-cchl__list-content">
                                <span class="two-cchl__list-title">
                                    <?php echo $item_title; ?>
                                </span>
                                <?php echo $item_excerpt; ?>
                            </div>
                        </div>
                    </li>
                <?php }; ?>
                </ul>
            </div>
        </div>
    </div>
</section>