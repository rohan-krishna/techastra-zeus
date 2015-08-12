<?php

/*

Template Name:Contact Page

*/

get_header();

?>

<div class="row" id="primary">
	<div class="container margin-top-152">
		<div class="col-md-12">
			<!-- Snazzy Google Maps !-->
			<?php echo do_shortcode('[wpgmza id="1"]'); ?>
		</div>

		<!-- Register Forms !-->
		<div class="col-md-12">
			<div class="col-md-6">
				<!-- Register Form !-->
				<?php

				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }

				?>
			</div>
			<div class="col-md-6 margin-top-152">
				<a href="#" id="eventLink">
				<div class="col-md-6 social-card bg-color-blue metro-tile">
					<i class="fa fa-facebook-square fa-inverse big-icon"></i>
				</div>
				</a>

				<a href="#" id="eventLink">
				<div class="col-md-6 social-card bg-color-primary metro-tile">
					<i class="fa fa-google-plus-square fa-inverse big-icon"></i>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>