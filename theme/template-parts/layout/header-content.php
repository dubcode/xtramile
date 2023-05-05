<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emd
 */

?>
<header id="masthead">
	<div class="masthead__inner container">
		<a href="<?php bloginfo('home'); ?>" class="masthead__logo">
			<img src="<?= get_template_directory_uri() . '/assets/img/Extramile-Digital-Logo-2x.png'; ?>" height="198" width="196"  alt="Extramile Digital Logo" title="Extramile Digital">
		</a>
		<div class="masthead__menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class' => 'masthead__nav',
					)
				);
			?>
		</div>
		<div class="masthead__end">
			<div class="masthead__end-inner">
				<!-- button -->
				<a class="masthead__button" href="<?php bloginfo('url'); ?>/contact/">
					<svg
						x="0px"
						y="0px"
						viewBox="0 0 281.3 54.7"
						style="enable-background:new 0 0 281.3 54.7;"
						xml:space="preserve"
					>
						<path d="M262.6,0.5h-8H30.5H18.7c-2.3,0-4.4,1.2-5.5,3.2L1.4,24.1c-1.1,2-1.1,4.4,0,6.4L13.2,51 c1.1,2,3.3,3.2,5.5,3.2h11.1h224.8h8c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L268.1,3.7C267,1.7,264.9,0.5,262.6,0.5" />
					</svg>
					<div class="masthead__button-label">
						<span>
							Get in touch
						</span>
					</div>
				</a>
				<!-- search -->
				<div class="masthead__search">
					<svg
						x="0px"
						y="0px"
						viewBox="0 0 61.1 54.7"
						style="enable-background: new 0 0 61.1 54.7;"
						xml:space="preserve"
					>
						<path class="masthead__search-border" d="M42.4,0.5H18.8c-2.3,0-4.4,1.2-5.5,3.2L1.4,24.1c-1.1,2-1.1,4.4,0,6.4L13.2,51 c1.1,2,3.3,3.2,5.5,3.2h23.6c2.3,0,4.4-1.2,5.5-3.2l11.8-20.4c1.1-2,1.1-4.4,0-6.4L47.9,3.7C46.8,1.7,44.7,0.5,42.4,0.5" />
						<path class="masthead__search-icon" d="M38.1,25.1c0,2.2-0.7,4.1-1.9,5.8l5.9,6c0.6,0.6,0.6,1.5,0,2.1s-1.5,0.6-2.1,0l-5.9-6c-1.6,1.2-3.6,1.9-5.8,1.9 c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8S38.1,19.7,38.1,25.1z M28.3,31.8c3.7,0,6.8-3,6.8-6.8s-3-6.8-6.8-6.8s-6.8,3-6.8,6.8 S24.6,31.8,28.3,31.8z" />
					</svg>
				</div>
				<!-- hamburger -->
				<button class="masthead__hamburger" type="button" title="Menu">
					<span class="masthead__hamburger-box">
						<span class="masthead__hamburger-inner" />
					</span>
				</button>
			</div>
		</div>
	</div>
</header>



