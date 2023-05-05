<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$logos = get_field('logos');
?>
<!-- BLOCK - OUR CLIENTS -->
<section class="oc">
    <div class="container">
        <div class="oc__inner">
            <div class="oc__intro">
                <h5 class="oc__title">
                    <?php echo $title; ?>
                </h5>
                <?php echo $excerpt; ?>
                <div class="oc__wrapper">
                    <div class="oc__grid">
                        <?php
                        foreach( $logos as $logo ) {
                            $image = $logo['image'];
                            $url = $logo['url'];
                        ?>
                            <div class="oc__cell">
                                <?php if( !empty( $url) ): ?><a href="<?php echo $url; ?>"><?php endif; ?>
                                <?php if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <?php if( !empty( $url) ): ?></a><?php endif; ?>
                            </div>
                        <?php }; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>