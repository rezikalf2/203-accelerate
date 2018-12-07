<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="featured-work">
	<div class="case-studies-on-home">
		<h3>Featured Work</h3>
		<?php query_posts('post_type=case_studies&posts_per_page=3') ?>
		<?php while ( have_posts() ) : the_post(); 
			$size = "full";
			$image_1 = get_field('image-1'); ?>
			<div class="each-case-on-home">
				<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?> </a>
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			</div>
       <?php endwhile; ?> 
	</div>
</section>
<section  class="services-land-page-main">

	<?php if( get_field('introduction_intro_title','47361') ): ?>
		<h4 class="intro-title" ><?php the_field('introduction_intro_title','47361'); ?></h4>
	<?php endif; ?>
	<div  class="services-land-page">
	<div class="service-1-lp">
		<?php if( get_field('service_1_logo','47361') ): ?>
			<img class="service-1-logo" src="<?php the_field('service_1_logo','47361'); ?>" />
		<?php endif; ?>
		<?php if( get_field('service_1_title','47361') ): ?>
			<h2 class="service-1-title" ><?php the_field('service_1_title','47361'); ?></h2>
		<?php endif; ?>
	</div><!-- end of service 1 lp-->
	<div class="service-2-lp">
		<?php if( get_field('service_2_logo','47361') ): ?>
			<img class="service-1-logo" src="<?php the_field('service_2_logo','47361'); ?>" />
		<?php endif; ?>
		<?php if( get_field('service_2_title','47361') ): ?>
			<h2 class="service-1-title" ><?php the_field('service_2_title','47361'); ?></h2>
		<?php endif; ?>
	</div><!-- end of service 2 lp-->
	<div class="service-3-lp">
		<?php if( get_field('service_3_logo','47361') ): ?>
			<img class="service-1-logo" src="<?php the_field('service_3_logo','47361'); ?>" />
		<?php endif; ?>
		<?php if( get_field('service_3_title','47361') ): ?>
			<h2 class="service-1-title" ><?php the_field('service_3_title','47361'); ?></h2>
		<?php endif; ?>
	</div><!-- end of service 3 lp-->
	<div class="service-4-lp">
		<?php if( get_field('service_4_logo','47361') ): ?>
			<img class="service-1-logo" src="<?php the_field('service_4_logo','47361'); ?>" />
		<?php endif; ?>
		<?php if( get_field('service_4_title','47361') ): ?>
			<h2 class="service-1-title" ><?php the_field('service_4_title','47361'); ?></h2>
		<?php endif; ?>
	</div><!-- end of service 4 lp-->
	</div><!-- end of  class="services-land-page"-->
</section> <!--end of section services on landing page-->
<section class="recent-posts">
 <div class="site-content">
  <div class="blog-post">
	  <h4>From the Blog</h4>
	  <?php query_posts('posts_per_page=1'); ?>
	  <?php while ( have_posts() ) : the_post(); ?>
       <h3><?php the_title(); ?></h3>
       <?php the_excerpt(); ?> 
     <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
  </div>
  <div class="feed">
	  <h4>From the news</h4>
  		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		  <?php endif; ?>
	</div><!-- end of feed class -->
 </div>
</section>

<?php get_footer(); ?>
<!--<section class="featured-work">
	<div class="site-content">
	<div class="blog-post">
		<h4>Featured Work</h4>
		<?php //query_posts('post_type=case_studies&posts_per_page=3'); ?>
	  	<?php //while ( have_posts() ) : the_post(); 
			//$image_1 = get_field('image_1');
			//$size = "full";
			?>
			<figure>
			<?php //if($image_1) { ?>
				<?php //echo wp_get_attachment_image( $image_1, 'medium' ); ?>
			<?php// } ?>
			</figure>
			<h3><a href="<?php// the_premalink() ?>"><?php //the_title(); ?></a><h3>
     	<?php// endwhile; ?> 
    	<?php //wp_reset_query(); ?>
	</div>
	</div>
</section>-->