<?php
/**
 * The template for displaying about page
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	
	
	<div class="about-main">
		<div class="about-head">

			<?php if( get_field('head_head_image') ): ?>
				<img class="head-image" src="<?php the_field('head_head_image'); ?>" />
			<?php endif; ?>
			<?php if( get_field('head_head_text') ): ?>
				<h2 class="head-text" ><?php the_field('head_head_text'); ?></h2>
			<?php endif; ?>	
		</div> <!--End of about head-->
		
		<div class="about-content">
			<div class="intro">
				<?php if( get_field('introduction_intro_title') ): ?>
					<h4 class="intro-title" ><?php the_field('introduction_intro_title'); ?></h4>
				<?php endif; ?>
				<?php if( get_field('introduction_intro_text') ): ?>
					<p class="intro-text" ><?php the_field('introduction_intro_text'); ?></p>
				<?php endif; ?>
			</div> <!--Enf Intro-->
			<div class="service-1">
				<?php if( get_field('service_1_logo') ): ?>
					<img class="service-1-logo" src="<?php the_field('service_1_logo'); ?>" />
				<?php endif; ?>
				<div class="service-1-details">
					<?php if( get_field('service_1_title') ): ?>
						<h2 class="service-1-title" ><?php the_field('service_1_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('service_1_text') ): ?>
						<p class="service-1-text" ><?php the_field('service_1_text'); ?></p>
					<?php endif; ?>
				</div> <!-- End of service 1 details-->
			</div> <!--End of service 1-->
			<div class="service-2">
				
				<div class="service-2-details">
					<?php if( get_field('service_2_title') ): ?>
						<h2 class="service-2-title" ><?php the_field('service_2_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('service_2_text') ): ?>
						<p class="service-2-text" ><?php the_field('service_2_text'); ?></p>
					<?php endif; ?>
				</div> <!-- End of service 2 details-->
				<?php if( get_field('service_2_logo') ): ?>
					<img class="service-2-logo" src="<?php the_field('service_2_logo'); ?>" />
				<?php endif; ?>
			</div> <!--End of service 2-->
			<div class="service-3 service-1">
				<?php if( get_field('service_3_logo') ): ?>
					<img class="service-1-logo" src="<?php the_field('service_3_logo'); ?>" />
				<?php endif; ?>
				<div class="service-1-details">
					<?php if( get_field('service_3_title') ): ?>
						<h2 class="service-1-title" ><?php the_field('service_3_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('service_3_text') ): ?>
						<p class="service-1-text" ><?php the_field('service_3_text'); ?></p>
					<?php endif; ?>
				</div> <!-- End of service 3 details-->
			</div> <!--End of service 3-->
			<div class="service-4 service-2">
				
				<div class="service-2-details">
					<?php if( get_field('service_4_title') ): ?>
						<h2 class="service-2-title" ><?php the_field('service_4_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('service_4_text') ): ?>
						<p class="service-2-text" ><?php the_field('service_4_text'); ?></p>
					<?php endif; ?>
				</div> <!-- End of service 4 details-->
				<?php if( get_field('service_4_logo') ): ?>
					<img class="service-2-logo" src="<?php the_field('service_4_logo'); ?>" />
				<?php endif; ?>
			</div> <!--End of service 4-->
			<div class="call-to-action">
				<?php if( get_field('call_to_action_invitation') ): ?>
					<h2 class="call-to-action-invitation" ><?php the_field('call_to_action_invitation'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('call_to_action_button')): ?>
					<a href="<?php the_field('call_to_action_button') ?>"><h2 class="call-to-action-button">Contact Us </h2></a>
				<?php endif; ?>

			</div><!-- end of call to action-->
		</div> <!-- end about-content-->

	</div>	<!--end about-main?-->
		
	<?php /*
	<?php if( get_field('head_head_image') ): ?>
				background="<?php the_field('head_head_image'); ?>"
				<?php endif; ?>
			
	<div class="ltr">
	<div>
	<?php if( get_field('service_logo') ): ?>
    		<img src="<?php the_field('service_logo'); ?>"/>
	<?php endif; ?>
	</div>
	
	<div>
		<?php if( get_field('service_name') ): ?>
    		<h2><?php the_field('service_name'); ?></h2>
		<?php endif; ?>			
		
		<?php if( get_field('service_text') ): ?>
    		<p><?php the_field('service_text'); ?></p>
		<?php endif;
		 ?>	
	</div>
	</div> */?>
	
<?php get_footer(); ?>
