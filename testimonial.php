<?php
get_header(); ?>
<div class="col-xs-12 col-sm-12 col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo do_shortcode("[show-testimonials orderby='menu_order' order='ASC' limit='10' pagination='on' layout='grid' options='theme:card,info-position:info-left,text-alignment:left,columns:1,rating:on,quote-content:short,charlimitextra:(...),display-image:on,image-size:ttshowcase_small,image-shape:square,image-effect:white-border,image-link:on']"); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .col-xs-12 col-sm-12 col-md-8 -->
<div class="col-xs-12 col-sm-6 col-md-4">
	<?php get_sidebar(); ?>
</div><!-- .col-xs-12 .col-sm-6 .col-md-4 -->
<?php get_footer(); ?>
