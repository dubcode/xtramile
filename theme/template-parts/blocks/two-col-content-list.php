<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$items = get_field('items');
?>
<section class="tcclx">
    <div class="container">
        <div class="tcclx__grid">
            <div class="tcclx__col tcclx__col-one">
                <div class="tcclx__content">
                    <div class="tcclx__title">
                        <?php echo $title; ?>
                    </div>
                    <div class="tcclx__excerpt">
                        <?php echo $excerpt; ?>
                    </div>
                </div>
            </div>
            <div class="tcclx__col tcclx__col-two">
                <ul>
                <?php
                    foreach( $items as $item ) {
                        $content = $item['content']; 
                ?>
                    <li>
                        <?php echo $content; ?>
                    </li>
                <?php }; ?>
                </ul>
            </div>
        </div>
    </div>
</section>