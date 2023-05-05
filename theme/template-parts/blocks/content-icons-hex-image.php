<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$items = get_field('icons_list');
$image = get_field('image');
?>
<section class="cihi">
    <div class="container">

        <!-- BLOCK - WHY -->
        <div class="cihi__grid">  
            <div class="cihi__col">
                <h2 class="cihi__title">
                    <?php echo $title; ?>
                </h2>
                <div class="cihi__excerpt">
                    <?php echo $excerpt; ?>
                </div>
                <div class="cihi__list">
                    <ul>
                        <?php foreach( $items as $item ) {
                            $label = $item['label'];
                            $icon = $item['thumbnail'];
                        ?>
                            <li>
                                <div class="cihi__item">
                                    <div>
                                        <?php 
                                        if( !empty( $icon ) ): ?>
                                            <img src="<?php echo esc_url($icon['sizes']['square']); ?>"  alt="<?php echo esc_attr($icon['alt']); ?>" />
                                        <?php endif; ?>
                                        <span>
                                            <?php echo $label; ?>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="cihi__hero">
        <div class="cihi__mask">
            <?php 
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['sizes']['hex']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>