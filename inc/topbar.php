	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-12 col-md-offset-8">
				<div class="top-bar">
					<?php  
						$tp_text = get_theme_mod( 'telephone_text', '' );
						$tp_num = get_theme_mod( 'telephone_number', '' );
						if ( ! empty( $tp_text ) || ! empty( $tp_num ) ) { ?>
							<div class="topbar-icon"><i class="fa fa-phone"></i></div><?php echo esc_html( $tp_text ) . ' ' . esc_html( $tp_num ) ?>
					<?php } ?>
					 <span class="top-border"></span>
					<?php 
						$email_text = get_theme_mod( 'email_text', '' );
						$email_address = get_theme_mod( 'email_address', '' );
						if( ! empty( $email_text ) || ! empty( $email_address ) ) { ?>
							<div class="topbar-icon"><i class="fa fa-envelope-o"></i></div><?php echo esc_html( $email_text ); ?><a href="mailto:<?php echo esc_html( $email_address ); ?>" target="_top"> <?php echo esc_attr($email_address); ?></a>
					<?php } ?>
					<?php 
						$top_bar_text = get_theme_mod( 'topbar_custom_text', '' );
						if( ! empty( $top_bar_text ) ) {
							echo '<div class="topbar-editor">' . esc_textarea( $top_bar_text ) . '</div>';
						} 
					?>
				</div>
			</div>
	</div>
</div>