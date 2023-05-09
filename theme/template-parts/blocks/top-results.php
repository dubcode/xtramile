<section>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <!-- BLOCK - RESULTS GRID -->
        <div class="results-grid top-results-grid">
            <div class="container">
                <ul class="results-list" id="results-container">
                    <?php
                        $post_one = get_field('post_one');
                        if( $post_one ): 
                    ?>
                    <li>
                        <?php echo '<a href="' . get_permalink( $post_one ) . '">'; ?>
                            <div class="result__inner">
                                <div class="result__icon">
                                    <svg
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 62 55.7"
                                        style="enable-background: new 0 0 62 55.7;"
                                        xml:space="preserve"
                                    >
                                        <path class="st0" d="M42.8,1H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2C47.2,2.2,45.1,1,42.8,1" />
                                        <path class="st1" d="M34.5,20.3c-0.4,0.4-0.4,1.1,0,1.5l4.8,4.8H21c-0.6,0-1,0.5-1,1 s0.5,1,1,1h18.3l-4.8,4.8c-0.4,0.4-0.4,1.1,0,1.5c0.4,0.4,1.1,0.4,1.4,0l6.5-6.6l0,0c0.1-0.1,0.2-0.2,0.2-0.3 c0.1-0.1,0.1-0.3,0.1-0.4c0-0.3-0.1-0.5-0.3-0.7L36,20.3C35.6,19.9,35,19.9,34.5,20.3C34.5,20.3,34.5,20.3,34.5,20.3z" />
                                    </svg>
                                </div>
                                <div class="result__thumbnail">
                                    <?php echo get_the_post_thumbnail( $post_one, 'mid' ); ?>
                                    <div class="result__thumbnail-overlay"></div>
                                </div>
                                <div class="result__content">
                                    <span class="result__title">
                                        <?php echo esc_html( $post_one->post_title ); ?>
                                    </span>
                                    <div class="result__excerpt">
                                    <?php echo esc_html( $post_one->post_excerpt ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php echo '</a>'; ?>
                    </li>
                    <?php
                    endif; 

                        $post_two = get_field('post_two');
                        if( $post_two ): 
                    ?>
                    <li>
                        <?php echo '<a href="' . get_permalink( $post_two ) . '">'; ?>
                            <div class="result__inner">
                                <div class="result__icon">
                                    <svg
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 62 55.7"
                                        style="enable-background: new 0 0 62 55.7;"
                                        xml:space="preserve"
                                    >
                                        <path class="st0" d="M42.8,1H19.2c-2.3,0-4.4,1.2-5.5,3.2L1.9,24.6c-1.1,2-1.1,4.4,0,6.4l11.8,20.4 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2L60.1,31c1.1-2,1.1-4.4,0-6.4L48.3,4.2C47.2,2.2,45.1,1,42.8,1" />
                                        <path class="st1" d="M34.5,20.3c-0.4,0.4-0.4,1.1,0,1.5l4.8,4.8H21c-0.6,0-1,0.5-1,1 s0.5,1,1,1h18.3l-4.8,4.8c-0.4,0.4-0.4,1.1,0,1.5c0.4,0.4,1.1,0.4,1.4,0l6.5-6.6l0,0c0.1-0.1,0.2-0.2,0.2-0.3 c0.1-0.1,0.1-0.3,0.1-0.4c0-0.3-0.1-0.5-0.3-0.7L36,20.3C35.6,19.9,35,19.9,34.5,20.3C34.5,20.3,34.5,20.3,34.5,20.3z" />
                                    </svg>
                                </div>
                                <div class="result__thumbnail">
                                    <?php echo get_the_post_thumbnail( $post_two, 'mid' ); ?>
                                    <div class="result__thumbnail-overlay"></div>
                                </div>
                                <div class="result__content">
                                    <span class="result__title">
                                        <?php echo esc_html( $post_two->post_title ); ?>
                                    </span>
                                    <div class="result__excerpt">
                                    <?php echo esc_html( $post_two->post_excerpt ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php echo '</a>'; ?>
                    </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>

    </article>
</section>