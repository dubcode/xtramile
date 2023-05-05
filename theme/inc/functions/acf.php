<?php
// ==============================
//   ____        _   _                   _____                 
//  / __ \      | | (_)                 |  __ \                
// | |  | |_ __ | |_ _  ___  _ __  ___  | |__) |_ _  __ _  ___ 
// | |  | | '_ \| __| |/ _ \| '_ \/ __| |  ___/ _` |/ _` |/ _ \
// | |__| | |_) | |_| | (_) | | | \__ \ | |  | (_| | (_| |  __/
//  \____/| .__/ \__|_|\___/|_| |_|___/ |_|   \__,_|\__, |\___|
//        | |                                        __/ |     
//        |_|                                       |___/      
// ==============================
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}



// ==============================
//   _____       _             _                      ____  _            _        
//  / ____|     | |           | |                    |  _ \| |          | |       
// | |  __ _   _| |_ ___ _ __ | |__   ___ _ __ __ _  | |_) | | ___   ___| | _____ 
// | | |_ | | | | __/ _ \ '_ \| '_ \ / _ \ '__/ _` | |  _ <| |/ _ \ / __| |/ / __|
// | |__| | |_| | ||  __/ | | | |_) |  __/ | | (_| | | |_) | | (_) | (__|   <\__ \
//  \_____|\__,_|\__\___|_| |_|_.__/ \___|_|  \__, | |____/|_|\___/ \___|_|\_\___/
//                                             __/ |                              
//                                            |___/                               
// ==============================

function emd_register_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'emd-blocks',
                'title' => __( 'EMD Blocks', 'emd' ),
            ),
        )
    );
}

function emd_register_acf_blocks() {
    if( function_exists('acf_register_block_type') ) {

        // Showreel Hero
        acf_register_block_type(array(
            'name'              => 'showreel-hero',
            'title'             => __('Showreel Hero'),
            'description'       => __('A fullscreen video background hero.'),
            'render_template'   => 'template-parts/blocks/showreel-hero.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'showreel', 'hero' ),
        ));

        // Looper
        acf_register_block_type(array(
            'name'              => 'looper',
            'title'             => __('Looper'),
            'description'       => __('Two Column Slider.'),
            'render_template'   => 'template-parts/blocks/looper.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'looper', 'slider' ),
        ));

        // CTA Bar
        acf_register_block_type(array(
            'name'              => 'cta-bar',
            'title'             => __('CTA Bar'),
            'description'       => __('Full Width CTA Button'),
            'render_template'   => 'template-parts/blocks/cta-bar.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'cta', 'button', 'bar' ),
        ));

        // CTA Button
        acf_register_block_type(array(
            'name'              => 'cta-button',
            'title'             => __('CTA Button'),
            'description'       => __('Full Width CTA Button'),
            'render_template'   => 'template-parts/blocks/cta-button.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'cta', 'button', 'bar' ),
        ));

        // Services Grid
        acf_register_block_type(array(
            'name'              => 'services-grid',
            'title'             => __('Services Grid'),
            'description'       => __('4 Column Services Grid'),
            'render_template'   => 'template-parts/blocks/services-grid.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'services', 'grid' ),
        ));

        // Two Hex Image Content
        acf_register_block_type(array(
            'name'              => 'two-hex-image-content',
            'title'             => __('Two Hex Image Content'),
            'description'       => __('Two Hex Images & Content'),
            'render_template'   => 'template-parts/blocks/two-hex-image-content.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'content', 'images' ),
        ));

        // Two Col Content & List
        acf_register_block_type(array(
            'name'              => 'two-col-content-list',
            'title'             => __('Two Col Content & List'),
            'description'       => __('Two Col Content & List'),
            'render_template'   => 'template-parts/blocks/two-col-content-list.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'content', 'list' ),
        ));

        // Two Col Content & Hex List
        acf_register_block_type(array(
            'name'              => 'two-col-content-hex-list',
            'title'             => __('Two Col Content & Hex List'),
            'description'       => __('Two Col Content & Hex List'),
            'render_template'   => 'template-parts/blocks/two-col-content-hex-list.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'content', 'list' ),
        ));

        // Two Col Content & Hex Image
        acf_register_block_type(array(
            'name'              => 'two-col-content-hex-image',
            'title'             => __('Two Col Content & Hex Image'),
            'description'       => __('Two Col Content & Hex Image'),
            'render_template'   => 'template-parts/blocks/two-col-content-hex-image.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'content', 'image' ),
        ));

        // Two Col Content & Hex CTA
        acf_register_block_type(array(
            'name'              => 'two-col-content-hex-cta',
            'title'             => __('Two Col Content & Hex CTA'),
            'description'       => __('Two Col Content & Hex CTA'),
            'render_template'   => 'template-parts/blocks/two-col-content-hex-cta.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'content', 'CTA' ),
        ));

        // Team Members
        acf_register_block_type(array(
            'name'              => 'team-members',
            'title'             => __('Team Members'),
            'description'       => __('Team Members'),
            'render_template'   => 'template-parts/blocks/team-members.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'team', 'grid' ),
        ));

        // Three Col Offset Images
        acf_register_block_type(array(
            'name'              => 'three-col-offset-images',
            'title'             => __('Three Col Offset Images'),
            'description'       => __('Three Col Offset Images'),
            'render_template'   => 'template-parts/blocks/three-col-offset-images.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'images', 'grid' ),
        ));


        // Clients
        acf_register_block_type(array(
            'name'              => 'clients',
            'title'             => __('Clients'),
            'description'       => __('Clients Grid Banner'),
            'render_template'   => 'template-parts/blocks/clients.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'clients', 'banner' ),
        ));

        // Articles
        acf_register_block_type(array(
            'name'              => 'articles',
            'title'             => __('Articles'),
            'description'       => __('Latest 3 Articles'),
            'render_template'   => 'template-parts/blocks/articles.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'articles', 'posts' ),
        ));

        // Footer CTA
        acf_register_block_type(array(
            'name'              => 'footer-cta',
            'title'             => __('Footer CTA'),
            'description'       => __('Footer CTA'),
            'render_template'   => 'template-parts/blocks/footer-cta.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'footer', 'cta' ),
        ));

        // Results
        acf_register_block_type(array(
            'name'              => 'results',
            'title'             => __('Results'),
            'description'       => __('Results'),
            'render_template'   => 'template-parts/blocks/results.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'results' ),
        ));

        // Page Header
        acf_register_block_type(array(
            'name'              => 'page-header',
            'title'             => __('Page Header'),
            'description'       => __('Page Header'),
            'render_template'   => 'template-parts/blocks/page-header.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'header', 'hero' ),
        ));

        // Page Header Two
        acf_register_block_type(array(
            'name'              => 'page-header-two',
            'title'             => __('Page Header Two'),
            'description'       => __('Page Header Two'),
            'render_template'   => 'template-parts/blocks/page-header-two.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'header', 'hero' ),
        ));

        // Plain Header
        acf_register_block_type(array(
            'name'              => 'plain-header',
            'title'             => __('Plain Header'),
            'description'       => __('Plain Header'),
            'render_template'   => 'template-parts/blocks/plain-header.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'header', 'plain' ),
        ));

        // Why
        acf_register_block_type(array(
            'name'              => 'why',
            'title'             => __('Why'),
            'description'       => __('Why'),
            'render_template'   => 'template-parts/blocks/why.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'why', 'content' ),
        ));

        // Content Icons and Hex Image
        acf_register_block_type(array(
            'name'              => 'content-icons-hex-image',
            'title'             => __('Content Icons & Hex Image'),
            'description'       => __('Content Icons & Hex Image'),
            'render_template'   => 'template-parts/blocks/content-icons-hex-image.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'icons', 'list' ),
        ));

        // Team Slider
        acf_register_block_type(array(
            'name'              => 'team-slider',
            'title'             => __('Team Slider'),
            'description'       => __('Team Slider'),
            'render_template'   => 'template-parts/blocks/team-slider.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'team', 'slider' ),
        ));

        // Jobs
        acf_register_block_type(array(
            'name'              => 'jobs',
            'title'             => __('Jobs'),
            'description'       => __('Jobs'),
            'render_template'   => 'template-parts/blocks/jobs.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'jobs', 'vacancies' ),
        ));

        // Interested
        acf_register_block_type(array(
            'name'              => 'interested',
            'title'             => __('Interested'),
            'description'       => __('Interested'),
            'render_template'   => 'template-parts/blocks/interested.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'interested' ),
        ));

        // Enquiry
        acf_register_block_type(array(
            'name'              => 'enquiry',
            'title'             => __('Enquiry'),
            'description'       => __('Enquiry'),
            'render_template'   => 'template-parts/blocks/enquiry.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'content', 'images' ),
        ));

        // Hex Stats
        acf_register_block_type(array(
            'name'              => 'hex-stat-content',
            'title'             => __('Hex Stat & Content'),
            'description'       => __('Hex Stat & Content'),
            'render_template'   => 'template-parts/blocks/hex-stat-content.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'stats', 'statistics' ),
        ));

        // Hex Stat & Content
        acf_register_block_type(array(
            'name'              => 'hex-stats',
            'title'             => __('Hex Stats'),
            'description'       => __('Hex Stats'),
            'render_template'   => 'template-parts/blocks/hex-stats.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'stats', 'statistics' ),
        ));

        // Support Form
        acf_register_block_type(array(
            'name'              => 'support-form',
            'title'             => __('Support Form'),
            'description'       => __('Support Form'),
            'render_template'   => 'template-parts/blocks/support-form.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'support', 'form' ),
        ));

        // Case Feature
        acf_register_block_type(array(
            'name'              => 'case-feature-one',
            'title'             => __('Case Feature One'),
            'description'       => __('Case Feature One'),
            'render_template'   => 'template-parts/blocks/case-feature-one.php',
            'category'          => 'emd-blocks',
            'icon'              => 'admin-post',
            'mode'              => 'edit',
            'keywords'          => array( 'case-study', 'feature' ),
        ));

    }
}

add_filter( 'block_categories', 'emd_register_block_category', 10, 2);
add_action('acf/init', 'emd_register_acf_blocks');
