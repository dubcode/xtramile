<?php
add_action('wp_ajax_load_more_results', 'load_more_results');
add_action('wp_ajax_nopriv_load_more_results', 'load_more_results');
function load_more_results() {

    // Get the page number from the AJAX request
    $page = intval($_POST['page']);

    // Get the tag from the AJAX request
    $tag = $_POST['tag'];

    // Set up the query arguments
    $args = array(
        'post_type' => 'results',
        'posts_per_page' => 6,
        'paged' => $page,
        'tag' => $tag,
    );

    if ($tag) {
        $args['tag'] = $tag;
    }

    // Run the query
    $results_query = new WP_Query( $args );

    // Loop through the results and build the HTML output
    if ( $results_query->have_posts() ) {
        while ( $results_query->have_posts() ) {
            $results_query->the_post(); ?>
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
                            <?php the_post_thumbnail('medium'); ?>
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
    }

    // Always die in functions echoing AJAX content
    wp_die();
}
?>
