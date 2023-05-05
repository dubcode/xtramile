<?php
$images = get_field('images');
?>
<!-- BLOCK - OUR CLIENTS -->
<section class="tcoi">
    <div class="tcoi__inner">
        <ul>
            <?php
            foreach( $images as $image ) {
                $picture = $image['picture'];
            ?>
            <li style="background: url('<?php echo $picture['sizes']['taller']; ?>') no-repeat center center; background-size: cover;"></li>
            <?php }; ?>
        </ul>
        <div class="tcoi__icon">
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
    </div>
</section>