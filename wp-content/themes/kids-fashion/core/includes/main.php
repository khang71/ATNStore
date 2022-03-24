<?php

add_action( 'admin_menu', 'kids_fashion_getting_started' );
function kids_fashion_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'kids-fashion'), esc_html__('Get Started', 'kids-fashion'), 'edit_theme_options', 'kids-fashion-guide-page', 'kids_fashion_test_guide');   
}

function kids_fashion_admin_enqueue_scripts() {
	wp_enqueue_style( 'kids-fashion-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'kids_fashion_admin_enqueue_scripts' );

if ( ! defined('KIDS_FASHION_DOCS_FREE') ){
define('KIDS_FASHION_DOCS_FREE',__('https://www.misbahwp.com/docs/kids-fashion-free-docs/','kids-fashion'));
}
if ( ! defined('KIDS_FASHION_DOCS_PRO') ){
define('KIDS_FASHION_DOCS_PRO',__('https://www.misbahwp.com/docs/kids-fashion-pro-docs','kids-fashion'));
}
if ( ! defined('KIDS_FASHION_BUY_NOW') ){
define('KIDS_FASHION_BUY_NOW',__('https://www.misbahwp.com/themes/fashion-kids-wordpress-theme/','kids-fashion'));
}
if ( ! defined('KIDS_FASHION_SUPPORT_FREE') ){
define('KIDS_FASHION_SUPPORT_FREE',__('https://wordpress.org/support/theme/kids-fashion','kids-fashion'));
}
if ( ! defined('KIDS_FASHION_REVIEW_FREE') ){
define('KIDS_FASHION_REVIEW_FREE',__('https://wordpress.org/support/theme/kids-fashion/reviews/#new-post','kids-fashion'));
}
if ( ! defined('KIDS_FASHION_DEMO_PRO') ){
define('KIDS_FASHION_DEMO_PRO',__('https://www.misbahwp.com/demo/fashion-kids/','kids-fashion'));
}

function kids_fashion_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( KIDS_FASHION_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'kids-fashion' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'kids-fashion' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( KIDS_FASHION_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'kids-fashion' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( KIDS_FASHION_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'kids-fashion' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','kids-fashion'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'kids-fashion'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','kids-fashion'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','kids-fashion'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','kids-fashion'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','kids-fashion'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'kids-fashion' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','kids-fashion'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( KIDS_FASHION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'kids-fashion' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( KIDS_FASHION_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'kids-fashion' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( KIDS_FASHION_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'kids-fashion' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
