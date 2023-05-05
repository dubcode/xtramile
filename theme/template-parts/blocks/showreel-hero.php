<?php
$title = get_field('showreel_title', false, false);
$video = get_field('showreel_video_url');
?>
<!-- TEMPLATE - SHOWREEL HERO -->
<section class="showreel">
    <div class="showreel__inner">
        <video autoplay loop muted>
        <source src="<?php echo esc_html($video); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="showreel__overlay">
            <div class="container">
                <h1 class="showreel__title">
                    <?php echo $title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>