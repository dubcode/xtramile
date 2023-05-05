<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- top sec -->
	<div class="posticle">
		<div class="container">
			<div class="posticle__header">

				<!-- title -->
				<h1 class="posticle__title">
					<?php the_title(); ?>
				</h1>

				<!-- breadcrumbs -->
				<div class="breadcrumbs-nav">
					<div>
						<nav>
							<ul class="tag-menu">
							<?php
							$args = array(
								'category_name' => 'blog',
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
									$tag_link = '/posts?tag=' . $tag_slug;
									?>
								<li class="breadcrumbs-selector">
									<a href="<?php echo $tag_link; ?>" class="tag-link">
									<div class="breadcrumbs-selector__before">
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
									<div class="breadcrumbs-selector__category">
										<?php echo $tag->name; ?>
									</div>
									<div class="breadcrumbs-selector__after">
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
							wp_reset_query();
							?>
								<li class="breadcrumbs-date">
									<?php echo get_the_date( 'M j, Y' ); ?>
								</li>
							</ul>
						</nav>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- hero -->
	<div class="posticle__hero">
		<div class="container">
			<?php the_post_thumbnail('single'); ?>
		</div>
	</div>

	<!-- contents -->
	<div class="contents">
		<div class="container">
			<div class="contents__grid">
				<div class="contents__col contents__col-one">
					<h2 class="contents__sub-title">
						<?php the_title(); ?>
					</h2>
					<div class="contents__date">
						<p><?php echo get_the_date( 'M j, Y' ); ?></p>
					</div>
				</div>
				<div class="contents__col contents__col-two content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- more articles -->
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
							<img src="<?php the_post_thumbnail_url('thumb');?>" alt="" />
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
				wp_reset_query();
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

</article>
