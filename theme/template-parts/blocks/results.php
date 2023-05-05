<section>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- BLOCK - RESULTS NAV -->
        <div class="results-nav">
            <div class="container">
                <nav>
                    <span class="results-nav__title">Filter - </span>
                    <ul class="tag-menu">
                    <li class="results-selector --active">
                        <a href="<?php bloginfo('url'); ?>/results/">
                            <div class="results-selector__before">
                                <svg x="0px" y="0px" viewBox="0 0 21.3 55" style="enable-background:new 0 0 21.3 55;" xml:space="preserve">
                                    <g>
                                        <defs>
                                            <rect id="SVGID_1_" width="21.3" height="55"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <path d="M262.4,0.5h-8H30.3H18.5c-2.3,0-4.4,1.2-5.5,3.2L1.2,24.1c-1.1,2-1.1,4.4,0,6.4L13,51 c1.1,2,3.3,3.2,5.5,3.2h11.1h224.8h8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L267.9,3.7 C266.8,1.7,264.7,0.5,262.4,0.5"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="results-selector__category">
                                All
                            </div>
                            <div class="results-selector__after">
                            <svg x="0px" y="0px" viewBox="0 0 21.3 55" style="enable-background:new 0 0 21.3 55;" xml:space="preserve">
                                <g>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_3_" x="0" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 21.2824 55)" width="21.3" height="55"/>
                                        </defs>
                                        <clipPath id="SVGID_4_">
                                            <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <path id="Path_25" class="st0" d="M-241.1,54.4h8H-9H2.8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L8.3,3.9 C7.2,1.9,5,0.7,2.8,0.7H-8.3h-224.8h-8c-2.3,0-4.4,1.2-5.5,3.2l-11.8,20.4c-1.1,2-1.1,4.4,0,6.4l11.8,20.5 C-245.5,53.2-243.4,54.4-241.1,54.4"/>
                                    </g>
                                </g>
                            </svg>
                            </div>
                        </a>
                    </li>
                    <?php
                    $args = array(
                        'post_type' => 'results',
                        'posts_per_page' => -1,
                    );

                    $the_query = new WP_Query( $args );
                    $tags = array();

                    // Get all tags from the posts
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            $post_tags = get_the_tags();
                            if ( $post_tags ) {
                                foreach( $post_tags as $tag ) {
                                    $tags[] = $tag;
                                }
                            }
                        }
                    }

                    // Remove duplicate tags
                    $tags = array_unique( $tags, SORT_REGULAR );

                    // Create menu links for each tag
                    if ( $tags ) {
                        foreach( $tags as $tag ) {
                            $tag_slug = $tag->slug;
                            $tag_link = '/results?tag=' . $tag_slug;
                            ?>
                        <li class="results-selector">
                            <a href="<?php echo $tag_link; ?>" class="tag-link">
                            <div class="results-selector__before">
                                <svg x="0px" y="0px" viewBox="0 0 21.3 55" style="enable-background:new 0 0 21.3 55;" xml:space="preserve">
                                    <g>
                                        <defs>
                                            <rect id="SVGID_1_" width="21.3" height="55"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <path d="M262.4,0.5h-8H30.3H18.5c-2.3,0-4.4,1.2-5.5,3.2L1.2,24.1c-1.1,2-1.1,4.4,0,6.4L13,51 c1.1,2,3.3,3.2,5.5,3.2h11.1h224.8h8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L267.9,3.7 C266.8,1.7,264.7,0.5,262.4,0.5"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="results-selector__category">
                                <?php echo $tag->name; ?>
                            </div>
                            <div class="results-selector__after">
                                <svg x="0px" y="0px" viewBox="0 0 21.3 55" style="enable-background:new 0 0 21.3 55;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <defs>
                                                <rect id="SVGID_3_" x="0" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 21.2824 55)" width="21.3" height="55"/>
                                            </defs>
                                            <clipPath id="SVGID_4_">
                                                <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                            </clipPath>
                                            <path id="Path_25" class="st0" d="M-241.1,54.4h8H-9H2.8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L8.3,3.9 C7.2,1.9,5,0.7,2.8,0.7H-8.3h-224.8h-8c-2.3,0-4.4,1.2-5.5,3.2l-11.8,20.4c-1.1,2-1.1,4.4,0,6.4l11.8,20.5 C-245.5,53.2-243.4,54.4-241.1,54.4"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            </a>
                        </li>
                        <?php }
                    }
                    ?>
                    </ul>
                </nav>
            </div>
        </div>
        
        <!-- BLOCK - RESULTS GRID -->
        <div class="results-grid">
            <div class="container">
                <ul class="results-list" id="results-container">
                    <?php
                    // Set up the query arguments
                    $args = array(
                        'post_type' => 'results',
                        'posts_per_page' => 6
                        /* 'paged' => get_query_var( 'paged' ), **/
                    );
                    $results_query = new WP_Query( $args );
                    if ( $results_query->have_posts() ) {
                        while ( $results_query->have_posts() ) {
                            $results_query->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
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
                                    <?php the_post_thumbnail('mid'); ?>
                                    <div class="result__thumbnail-overlay"></div>
                                </div>
                                <div class="result__content">
                                    <span class="result__title">
                                        <?php the_title(); ?>
                                    </span>
                                    <div class="result__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }
                    };
                    ?>
                </ul>

                <!-- Load More -->
                <div id="load-more-button" class="load-more-container flex w-full justify-center mt-24 mb-52 xl:mb-32">
                    <div class="cta grey__button load-more-button">
                        <svg
                            x="0px"
                            y="0px"
                            viewBox="0 0 281.3 54.7"
                            style="enable-background:new 0 0 281.3 54.7;"
                            xml:space="preserve"
                        >
                            <path d="M262.6,0.5h-8H30.5H18.7c-2.3,0-4.4,1.2-5.5,3.2L1.4,24.1c-1.1,2-1.1,4.4,0,6.4L13.2,51 c1.1,2,3.3,3.2,5.5,3.2h11.1h224.8h8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L268.1,3.7C267,1.7,264.9,0.5,262.6,0.5" />
                        </svg>
                        <div class="cta-label">
                            <span>
                                Read More Articles
                            </span>
                        </div>
                    </div>
                </div>

                <script>
                jQuery(function($) {
                    var page = 2; // The page number of the next set of posts
                    var container = $('#results-container'); // The container div

                    // Handle the "Load More" button click
                    $('#load-more-button').on('click', function() {
                        // Set up the AJAX request
                        var data = {
                            action: 'load_more_results',
                            page: page,
                        };

                        // Send the AJAX request
                        $.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
                            // Append the new posts to the container div
                            container.append(response);
                            console.log('Load More Button Response = ' + response);

                            // Increment the page number for the next set of posts
                            page++;
                        });
                    });

                    // Handle the tag link click
                    $('.tag-link').on('click', function(e) {
                        e.preventDefault();
                        var tagSlug = $(this).attr('href').split('?tag=')[1];
                        var data = {
                            action: 'load_more_results',
                            page: 1,
                            tag: tagSlug
                        };
                        $.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
                            container.empty();
                            container.append(response);
                            console.log('Tag Button Response = ' + response);
                        });
                    });

                });
                </script>

            </div>
        </div>

    </article>
</section>