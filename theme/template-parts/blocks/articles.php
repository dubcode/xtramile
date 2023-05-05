<!-- BLOCK - ARTICLES -->
<section class="articles">
    <div class="container">
        <span class="articles__title">
                Latest Articles
        </span>
        <ul class="articles__grid" id="articles-container">
            <?php
            // Set up the query arguments
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                /* 'paged' => get_query_var( 'paged' ), **/
            );
            $results_query = new WP_Query( $args );
            if ( $results_query->have_posts() ) {
                while ( $results_query->have_posts() ) {
                    $results_query->the_post();
            ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="article__thumbnail">
                        <img src="<?php the_post_thumbnail_url('thumb'); ?>" alt="" />
                    </div>
                    <div class="article__content">
                        <h5 class="article__title">
                            <?php the_title(); ?>
                        </h5>
                        <span class="article__date">
                            <?php echo get_the_date( 'M j, Y' ); ?>
                        </span>
                        <div class="article__excerpt">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class="article__cta">
                        <svg width="60" height="53.676" viewBox="0 0 60 53.676">
                            <path d="M72.881,50.888h-23.6a6.4,6.4,0,0,0-5.543,3.2l-11.8,20.438a6.4,6.4,0,0,0,0,6.4l11.8,20.438a6.4,6.4,0,0,0,5.543,3.2h23.6a6.4,6.4,0,0,0,5.543-3.2l11.8-20.438a6.4,6.4,0,0,0,0-6.4l-11.8-20.438a6.4,6.4,0,0,0-5.543-3.2" transform="translate(-31.081 -50.888)" />
                        </svg>
                        <div class="article__cta-label">
                            <span>Read More</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php
                }
            };
            ?>
        </ul>
        <!-- button -->
        <div id="more-articles" class="flex w-full justify-center mb-52 xl:mb-32">
            <div class="cta grey__button">
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
                    var container = $('#articles-container'); // The container div

                    // Handle the "Load More" button click
                    $('#more-articles').on('click', function() {
                        // Set up the AJAX request
                        var data = {
                            action: 'load_more_articles',
                            page: page,
                        };

                        // Send the AJAX request
                        $.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
                            // Append the new posts to the container div
                            container.append(response);
                            console.log('Load More Articles Response = ' + response);

                            // Increment the page number for the next set of posts
                            page++;
                        });
                    });

                });
                </script>
    </div>
</section>