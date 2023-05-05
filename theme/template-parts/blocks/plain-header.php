<?php
$title = get_field('title');
$background = get_field('background');
?>
<section>
    <div class="block w-full">

        <!-- BLOCK - PAGE HERO -->
        <div class="plain-header plain-header__left" style="background: <?php echo $background; ?>">  
        <div class="plain-header__overlay">
                <div class="plain-header__inner">
                    <div class="container plain-header__content">
                        <h1 class="plain-header__title">
                            <?php echo $title; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>