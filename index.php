<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package techastra-zeus
 */

get_header(); ?>

	<div id="primary" class="row">
		<div class="col-md-12 section-landing hidden-xs">
			<div class="landing-text">
				<h1>
					Techastra '15
				</h1>
				<p> 25th - 26th August </p>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/office.jpg" draggable="false" class="img-office" />	
		</div>
		
		<div class="col-md-12 bg-color-primary-ascend" id="about">
			<div class="container section-about">
				<h2 class="text-center">About Techastra</h2>
				<p>Techastra is the National Level symposium conducted by the students if Computer Science and Engineering / Information Technology for the students from various engineering institutions.Techastra '15 is the seventh sequel.It has been providing a platform for the budding software engineers from across the country to display their prowess in various fields of computing.</p>
			</div>
		</div>

		<div class="col-md-12 event-wrapper" id="events">
			<div class="container">
				<h1 class="text-center thin-header">Events</h1>
				<div class="col-md-6 padding-152 metro-tile">
					<div class="event-box bg-color-green">
						<h1>12</h1>
						<h3>Senior Events</h3>
						<p>25th August</p>
					</div>
				</div>
				<div class="col-md-6 padding-152 metro-tile">
					<div class="event-box bg-color-magenta">
						<h1>10</h1>
						<h3>Junior Events</h3>
						<p>26th August</p>
					</div>
				</div>
				<div class="col-md-12 event-register text-center">
					<a href="<?php echo bloginfo('url'); ?>/events-2" class="btn-register">View More</a>
				</div>
			</div>
		</div>

		<div class="col-md-12 margin-top-152">
			<div class="container">
				<div class="col-md-12" id="owlCarousel">
					<?php
						$args = array(
							'post_type' => 'post',
							'category_name' => 'partners');
						$partners = new WP_Query($args);

						if ( $partners->have_posts() ) : while ($partners->have_posts() ) : $partners->the_post(); 
					?>

					<div class="item">
						<figure><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></figure>
					</div>

					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
