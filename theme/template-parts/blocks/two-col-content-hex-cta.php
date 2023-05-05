<?php
    $title = get_field('title');
    $excerpt = get_field('excerpt');
    $hex_title = get_field('hex_title');
    $hex_excerpt = get_field('hex_excerpt');
    $hex_button_label = get_field('hex_button_label');
    $hex_button_url = get_field('hex_button_url');
?>
<section class="tcchx">
    <div class="container">
        <div class="tcchx__grid">
            <div class="tcchx__grid-col tcchx__grid-col-one">
                <div class="tcchx__grid-content">
                    <span class="tcchx__title">
                        <?php echo $title; ?>
                    </span>
                    <div class="tcchx__excerpt">
                        <?php echo $excerpt; ?>
                    </div>
                </div>
            </div>
            <div class="tcchx__grid-col tcchx__grid-col-two">
                <div class="tcchx__hex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="53.676" viewBox="0 0 60 53.676">
                        <path id="Path_25" data-name="Path 25" d="M72.881,50.888h-23.6a6.4,6.4,0,0,0-5.543,3.2l-11.8,20.438a6.4,6.4,0,0,0,0,6.4l11.8,20.438a6.4,6.4,0,0,0,5.543,3.2h23.6a6.4,6.4,0,0,0,5.543-3.2l11.8-20.438a6.4,6.4,0,0,0,0-6.4l-11.8-20.438a6.4,6.4,0,0,0-5.543-3.2" transform="translate(-31.081 -50.888)" />
                    </svg>
                </div>
                <div class="tcchx__hex-content">
                    <div>
                        <div class="tcchx__hex-title">
                            <?php echo $hex_title; ?>
                        </div>
                        <div class="tcchx__hex-excerpt">
                            <?php echo $hex_excerpt; ?>
                        </div>
                        <?php echo $hex_button_label; ?>
                        <?php echo $hex_button_url; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>