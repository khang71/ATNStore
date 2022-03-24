<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function kids_fashion_enqueue_google_fonts() { 
	wp_enqueue_style( 'google-fonts-baloo', 'https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;500;600;700;800&display=swap' );

	wp_enqueue_style( 'google-fonts-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'kids_fashion_enqueue_google_fonts' );

if (!function_exists('kids_fashion_enqueue_scripts')) {

	function kids_fashion_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			esc_url( get_template_directory_uri() ) . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			esc_url( get_template_directory_uri() ) . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			esc_url( get_template_directory_uri() ) . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('kids-fashion-style', get_stylesheet_uri(), array() );

		wp_style_add_data('kids-fashion-style', 'rtl', 'replace');

		wp_enqueue_style(
			'kids-fashion-media-css',
			esc_url( get_template_directory_uri() ) . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'kids-fashion-woocommerce-css',
			esc_url( get_template_directory_uri() ) . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'kids-fashion-navigation',
			esc_url( get_template_directory_uri() ) . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			esc_url( get_template_directory_uri() ) . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'kids-fashion-script',
			esc_url( get_template_directory_uri() ) . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				header.header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'kids-fashion-style', $css );

	}

	add_action( 'wp_enqueue_scripts', 'kids_fashion_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('kids_fashion_after_setup_theme')) {

	function kids_fashion_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'kids-fashion' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 100
		));
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'kids_fashion_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/**------------------------------------------------------------------------------------------
 * Enqueue theme logo style.
 */
function kids_fashion_logo_resizer() {

    $theme_logo_size_css = '';
    $kids_fashion_logo_resizer = get_theme_mod('kids_fashion_logo_resizer');

	$theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($kids_fashion_logo_resizer).'px !important;
			width: '.esc_attr($kids_fashion_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'kids-fashion-style',$theme_logo_size_css );	

}
add_action( 'wp_enqueue_scripts', 'kids_fashion_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function kids_fashion_global_color() {

    $theme_color_css = '';
    $kids_fashion_global_color = get_theme_mod('kids_fashion_global_color');
    $kids_fashion_global_color_2 = get_theme_mod('kids_fashion_global_color_2');

	$theme_color_css = '
		a.shop-btn,p.slider_btn a,a.cart-customlocation i,#main-menu ul.children li a:hover,#main-menu ul.sub-menu li a:hover,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.kids-fashion-pagination span.current,.kids-fashion-pagination span.current:hover,.kids-fashion-pagination span.current:focus,.kids-fashion-pagination a span:hover,.kids-fashion-pagination a span:focus,.comment-respond input#submit,.comment-reply a,.sidebar-area .tagcloud a,.searchform input[type=submit],.searchform input[type=submit]:hover ,.searchform input[type=submit]:focus,.menu-toggle,.dropdown-toggle,button.close-menu,nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.scroll-up a,.sidebar-area h4.title {
			background: '.esc_attr($kids_fashion_global_color).';
		}
		a:hover,a:focus,.logo a:hover,.logo a:focus,.social-links a:hover,#main-menu a:hover,#main-menu ul li a:hover,#main-menu li:hover > a,#main-menu a:focus,#main-menu ul li a:focus,#main-menu li.focus > a,#main-menu li:focus > a,#main-menu ul li.current-menu-item > a,#main-menu ul li.current_page_item > a,#main-menu ul li.current-menu-parent > a,#main-menu ul li.current_page_ancestor > a,#main-menu ul li.current-menu-ancestor > a,.post-meta i,.woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price,#products .product-text a:hover,#products .tab-product ins span.woocommerce-Price-amount.amount bdi,.woocommerce div.product p.price,.blog_box h2,.tab-product .star-rating span::before {
			color: '.esc_attr($kids_fashion_global_color).';
		}
		 .slider .owl-carousel button.owl-dot  {
			border-color: '.esc_attr($kids_fashion_global_color).';
		 }
		 a.cart-customlocation p.cart-item-box,p.slider_btn a:hover,.tab-product span.onsale,.box-content a.button:hover,.box .box-content,.woocommerce a.button:hover,.scroll-up a:hover,nav.woocommerce-MyAccount-navigation ul li:hover,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.comment-respond input#submit:hover, .comment-reply a:hover,a.shop-btn,.woocommerce .cart .button:hover,.woocommerce a.button.alt:hover,a.shop-btn:hover,.woocommerce button.button.alt:hover,.sidebar-area .tagcloud a:hover,.woocommerce a.added_to_cart:hover,.comment-respond input#submit:hover,.woocommerce #respond input#submit:hover {
			background: '.esc_attr($kids_fashion_global_color_2).';
		}
		h1,h2,h3,h4,h5,h6,.tab-product ins span.woocommerce-Price-amount.amount bdi,.woocommerce div.product p.price {
			color: '.esc_attr($kids_fashion_global_color_2).';
		}
		.slider .owl-carousel button.owl-dot.active,.sidebar-area h4.title  {
			border-color: '.esc_attr($kids_fashion_global_color_2).';
		 }
	';
    wp_add_inline_style( 'kids-fashion-style',$theme_color_css );
    wp_add_inline_style( 'kids-fashion-woocommerce-css',$theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'kids_fashion_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('kids_fashion_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function kids_fashion_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'kids-fashion'); 
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'kids-fashion'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'kids-fashion'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'kids-fashion' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'kids-fashion'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for kids_fashion_comment()

if (!function_exists('kids_fashion_widgets_init')) {

	function kids_fashion_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','kids-fashion'),
			'id'   => 'kids-fashion-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'kids-fashion'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','kids-fashion'),
			'id'   => 'kids-fashion-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'kids-fashion'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'kids_fashion_widgets_init' );

}

function kids_fashion_get_categories_select() {
	$teh_cats = get_categories();
	$results;
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

function kids_fashion_sanitize_select( $input, $setting ) {	
	// Ensure input is a slug
	$input = sanitize_key( $input );
	
	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'kids_fashion_loop_columns', 999);
if (!function_exists('kids_fashion_loop_columns')) {
	function kids_fashion_loop_columns() {
		return 3; // 3 products per row
	}
}

function kids_fashion_remove_sections( $wp_customize ) {
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_setting('display_header_text');
}
add_action( 'customize_register', 'kids_fashion_remove_sections');

//redirect
Function kids_fashion_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=kids-fashion-guide-page") );
   	}
}
add_action('after_setup_theme', 'kids_fashion_notice');

?>