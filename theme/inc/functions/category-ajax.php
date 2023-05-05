<?php
add_action('wp_ajax_load_more_categories', 'load_more_categories');
add_action('wp_ajax_nopriv_load_more_categories', 'load_more_categories');
function load_more_categories() {

    // Get the page number from the AJAX request
    $page = intval($_POST['page']);

    // Get the tag from the AJAX request
    $tag = $_POST['tag'];

    // Set up the query arguments
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => $page,
        'tag' => $tag,
    );


    if ($tag) {
        $args['tag'] = $tag;
    }



    // Run the query
    $categories_query = new WP_Query( $args );

    // Loop through the categories and build the HTML output
    if ( $categories_query->have_posts() ) {
        while ( $categories_query->have_posts() ) {
            $categories_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url();?>" alt="" />
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
    }

    // Always die in functions echoing AJAX content
    wp_die();
}
?>
