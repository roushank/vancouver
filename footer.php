<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package thbusiness
 */
?>
</div><!-- .row -->
</div><!-- .container -->
	</div><!-- #content -->
	
<div class="container-fluid">
<div class="row">
	<span class="scrollup-icon"><a href="#" class="scrollup"></a></span>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="row">
		<?php if ( is_active_sidebar( 'footer-left' ) || is_active_sidebar( 'footer-mid' ) || is_active_sidebar( 'footer-right' ) ) : ?>
			<div class="footer-widget-area">
				<div class="col-md-4">
					<div class="left-footer">
						<?php get_sidebar( 'footer-left' ); ?>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="mid-footer">
						<?php get_sidebar( 'footer-mid' ); ?>					
					</div>
				</div>

				<div class="col-md-4">
					<div class="right-footer">
						<?php get_sidebar( 'footer-right' ); ?>					
					</div>
				</div>						
			</div><!-- .footer-widget-area -->
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->		
	<div class="footer-site-info">
		<div class="container">
		<div class="row">
			<div class="footer-details-container">
				<div class="copyright-container">
					<?php 
						$footer_copyright_text = get_theme_mod( 'footer_copyright_text', '' );
						if( !empty( $footer_copyright_text ) ) {
							echo wp_kses_post( $footer_copyright_text ); 
						} else { ?>
							<div class="col-xs-12 col-md-6 col-sm-6">
								<div class="credit-container">				
								&copy; <?php echo date('Y');?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a> | <a href="<?php echo esc_url( __( 'https://saffron9.com/', 'thbusiness' ) ); ?>"><?php printf( __( 'Powered by %s', 'thbusiness' ), 'Saffron9' ); ?></a>
								</div>
							</div>
							<div class="col-xs-12 col-md-6 col-sm-6 fr">
								<?php
								if ( get_theme_mod( 'display_social_icons', '1' ) == '1' ) : ?>
								<div class="th-social-area">
									<?php 
									$social_text = get_theme_mod( 'social_media_text', '' ); 
									if( ! empty( $social_text ) ) {
									echo '<span class="social-text">' . esc_html( $social_text ) . '</span>'; 
									}
									?>
									<?php if ( get_theme_mod( 'facebook_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'facebook_url','') ) ?>" target="_blank"><div class="th-social-icon facebook"><i class="fa fa-facebook"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'twitter_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'twitter_url','') ) ?>" target="_blank"><div class="th-social-icon twitter"><i class="fa fa-twitter"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'googleplus_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'googleplus_url','') ) ?>" target="_blank"><div class="th-social-icon googleplus"><i class="fa fa-google-plus"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'linkedin_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'linkedin_url','') ) ?>" target="_blank"><div class="th-social-icon linkedin"><i class="fa fa-linkedin"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'youtube_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'youtube_url','') ) ?>" target="_blank"><div class="th-social-icon youtube"><i class="fa fa-youtube"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'dribbble_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'dribbble_url','') ) ?>" target="_blank"><div class="th-social-icon dribbble"><i class="fa fa-dribbble"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'github_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'github_url','') ) ?>" target="_blank"><div class="th-social-icon github"><i class="fa fa-github"></i></div></a>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'flickr_url','' ) ) : ?>
									<a href="<?php echo esc_url( get_theme_mod( 'flickr_url','') ) ?>" target="_blank"><div class="th-social-icon flickr"><i class="fa fa-flickr"></i></div></a>
									<?php endif; ?>
									</div>

									<?php endif; ?>
								</div>
								<?php } ?>
							</div>
				</div><!-- .footer-details-container -->
			</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .row -->
</div><!-- .container-fluid -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>