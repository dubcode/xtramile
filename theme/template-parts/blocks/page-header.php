<?php
$title = get_field('title');
$excerpt = get_field('excerpt', false, false);
$background = get_field('background');
$style = get_field('style');
?>
<section>
    <div class="block w-full">

        <!-- BLOCK - PAGE HERO -->
        <div class="page-hero <?php echo $style; ?>" style="background: url('<?php echo $background['sizes']['hero']; ?>') no-repeat center center; background-size: cover;">  
        <div class="page-hero__overlay">
                <div class="page-hero__inner">
                    <div class="container page-hero__content">
                        <h1 class="page-hero__title">
                            <?php echo $title; ?>
                        </h1>
                        <?php echo $excerpt; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>