<section class="jobs">
    <div class="container">
        <h3 class="jobs__title">Our Current Roles</h3>
        <ul>
            <?php
            // Set up the query arguments
            $args = array(
                'post_type' => 'vacancy'
            );
            $job_query = new WP_Query( $args );
            if ( $job_query->have_posts() ) {
                while ( $job_query->have_posts() ) {
                    $job_query->the_post();
                    $post_id = get_the_ID();
                    $terms = get_field('job_terms', $post_id );
                    $location = get_field('job_location', $post_id );
            ?>
            <li>
                <div class="job">
                    <div class="job__col">
                        <span class="job__role">
                            <?php the_title(); ?>
                        </span>
                        <p class="job__terms">
                            <?php echo $terms; ?>
                        </p>
                        <p class="job__location">
                            Location - <?php echo $location; ?>
                        </p>
                        <p class="job__date">
                            <?php
                            $post_date = get_the_date('U');
                            $current_date = current_time('U');
                            $days_ago = human_time_diff($post_date, $current_date);
                            echo 'Posted - ' . $days_ago . ' ago';
                            ?>

                        </p>
                    </div>
                    <div class="job__col job__buttons">
                        <div>
                            <div class="job-selector">
                                <a href="#" class="tag-link">
                                    <div class="job-selector__before">
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
                                    <div class="job-selector__category">
                                        Apply Now
                                    </div>
                                    <div class="job-selector__after">
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
                            </div>
                            <div class="job-more">
                                <a href="#">
                                    Find Out More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
                }
            };
            ?>
        </ul>
    </div>
</section>