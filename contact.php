<?php
/* Template name: Contact*/
get_header(); ?>
<div class="col-xs-12 col-sm-12 col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-md-6">
					<b>Vancouver Accounting Coaching</b>
					<i class="fa fa-map-marker"></i>7088-18th Avenue, 
					Unit # 3007
					Burnaby, BC V3N 0A2

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.32690646119!2d-122.95885228431304!3d49.21332707932384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867632e880b2cd%3A0x530bada31cd9e427!2s7088+18th+Ave+%233007%2C+Burnaby%2C+BC+V3N+0A2%2C+Canada!5e0!3m2!1sen!2sin!4v1471067910896" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .col-xs-12 col-sm-12 col-md-8 -->
<div class="col-xs-12 col-sm-6 col-md-4">
	<?php get_sidebar(); ?>
</div><!-- .col-xs-12 .col-sm-6 .col-md-4 -->
<?php get_footer(); ?>
