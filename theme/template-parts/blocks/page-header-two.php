<?php
$title = get_field('title');
$excerpt = get_field('excerpt', false, false);
$hero = get_field('hero');
$breadcrumbs = get_field('breadcrumbs');
?>

<section>
    <div class="block w-full">

        <!-- BLOCK - RESULT HERO -->
        <div class="result-hero">
            <div class="container result-hero__inner">

                <div class="result-hero__content">
                        <?php 
                        if($breadcrumbs) {
                            $tags = get_tags(array(
                            'hide_empty' => false
                            ));
                            if($tags) {
                                echo '<div class="page-crumbs"><ul>';
                                foreach ($tags as $tag) {
                                echo '<li>' . $tag->name . '</li>';
                                }
                                echo '</ul></div>';
                            }
                        }
                        ?>
                    <h1 class="result-hero__title">
                        <?php echo $title; ?>
                    </h1>
                    <?php echo $excerpt; ?>
                </div>

                <div class="result-hero__hero">
                    <?php 
                    if( !empty( $hero ) ): ?>
                        <img src="<?php echo esc_url($hero['sizes']['default']); ?>"  alt="<?php echo esc_attr($hero['alt']); ?>" />
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </div>
</section>