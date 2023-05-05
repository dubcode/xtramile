<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$items = get_field('icons_list');
$image = get_field('image');
?>
<section class="why">
    <div class="container">

        <!-- BLOCK - WHY -->
        <div class="why__grid">  
            <div class="why__col">
                <h2 class="why__title">
                    <?php echo $title; ?>
                </h2>
                <div class="why__excerpt">
                    <?php echo $excerpt; ?>
                </div>
                <div class="why__list">
                    <ul>
                        <?php foreach( $items as $item ) {
                            $label = $item['label'];
                            $icon = $item['thumbnail'];
                        ?>
                            <li>
                                <div class="why__item">
                                    <div>
                                        <?php 
                                        if( !empty( $icon ) ): ?>
                                            <img src="<?php echo esc_url($icon['sizes']['thumbnail']); ?>"  alt="<?php echo esc_attr($icon['alt']); ?>" />
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

    <div class="why__hero">
        <div class="why__mask">
            <?php 
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['sizes']['hex']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>