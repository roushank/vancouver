<?php
/**
 * Template Name: Business Template
 *
 * Displays the Business Template of the theme.
 *
 * @package thbusiness
 */
get_header(); ?>
</div><!-- .row -->
</div><!-- .container -->

	<?php
		query_posts('page_id=6');
		while (have_posts()) : the_post();
	?>
	<div id="about" class="section">
		<div class="container">           
			<div class="row">
				<div class="col-md-2 col-sm-4 col-xs-12">
					<h2><?php the_title();?></h2>
				</div>
				<div id="about-content" class="col-md-10 col-sm-8 col-xs-12">
					<p><?php the_content(); ?></p>
				</div>
				</div>
			</div><!-- .row -->
		</div>
	</div>
	<?php endwhile;?>
	<?php
		if( is_active_sidebar( 'thbusiness-business-top-sidebar' ) ) {
			// Calling the business page top section sidebar if it exists.
			if ( !dynamic_sidebar( 'thbusiness-business-top-sidebar' ) ):
			endif;
		} ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
			<?php 
				if( is_active_sidebar( 'thbusiness-business-left-sidebar' ) ) {
				// Calling the business page left section sidebar if it exists.
				if ( !dynamic_sidebar( 'thbusiness-business-left-sidebar' ) ):
				endif;
			} ?>		
			</div><!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
			<?php 
				if( is_active_sidebar( 'thbusiness-business-right-sidebar' ) ) {
				// Calling the business page right section sidebar if it exists.
				if ( !dynamic_sidebar( 'thbusiness-business-right-sidebar' ) ):
				endif;
			} ?>		
			</div><!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .container -->

	<?php 
	if( is_active_sidebar( 'thbusiness-business-bottom-sidebar' ) ) {
		// Calling the business page bottom sidebar if it exists.
		if ( !dynamic_sidebar( 'thbusiness-business-bottom-sidebar' ) ):
		endif;
	} ?>	

<div class="container">
<div class="row">
<?php get_footer(); ?>
