<?php 
	$kid_toys_store_custom_css ='';

	/*------------------Width Layout -------------------*/
	$kid_toys_store_theme_lay = get_theme_mod( 'kid_toys_store_width_options','Full Layout');
    if($kid_toys_store_theme_lay == 'Full Layout'){
		$kid_toys_store_custom_css .='body{';
			$kid_toys_store_custom_css .='max-width: 100%;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_theme_lay == 'Contained Layout'){
		$kid_toys_store_custom_css .='body{';
			$kid_toys_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_theme_lay == 'Boxed Layout'){
		$kid_toys_store_custom_css .='body{';
			$kid_toys_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$kid_toys_store_custom_css .='}';
	}

	/*------------- Slider Opacity -------------------*/
	$kid_toys_store_slider_layout = get_theme_mod( 'kid_toys_store_slider_opacity','0.7');
	if($kid_toys_store_slider_layout == '0'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.1'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.1';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.2'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.2';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.3'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.3';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.4'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.4';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.5'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.5';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.6'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.6';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.7'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.7';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.8'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.8';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == '0.9'){
		$kid_toys_store_custom_css .='#slider img{';
			$kid_toys_store_custom_css .='opacity:0.9';
		$kid_toys_store_custom_css .='}';
	}

	/*-------------Slider Content Layout ------------*/
	$kid_toys_store_slider_layout = get_theme_mod( 'kid_toys_store_slider_content_option','Left');
    if($kid_toys_store_slider_layout == 'Left'){
		$kid_toys_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$kid_toys_store_custom_css .='text-align:start;';
		$kid_toys_store_custom_css .='}';
		$kid_toys_store_custom_css .='#slider .carousel-caption{';
		$kid_toys_store_custom_css .='left:15%; right:45%;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == 'Center'){
		$kid_toys_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$kid_toys_store_custom_css .='text-align:center;';
		$kid_toys_store_custom_css .='}';
		$kid_toys_store_custom_css .='#slider .carousel-caption{';
		$kid_toys_store_custom_css .='left:25%; right:25%;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_slider_layout == 'Right'){
		$kid_toys_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$kid_toys_store_custom_css .='text-align:end;';
		$kid_toys_store_custom_css .='}';
		$kid_toys_store_custom_css .='#slider .carousel-caption{';
		$kid_toys_store_custom_css .='left:45%; right:15%;';
		$kid_toys_store_custom_css .='}';
	}

	/* Slider content spacing */
	$kid_toys_store_top_spacing = get_theme_mod('kid_toys_store_slider_top_spacing');
	$kid_toys_store_bottom_spacing = get_theme_mod('kid_toys_store_slider_bottom_spacing');
	$kid_toys_store_left_spacing = get_theme_mod('kid_toys_store_slider_left_spacing');
	$kid_toys_store_right_spacing = get_theme_mod('kid_toys_store_slider_right_spacing');
	if($kid_toys_store_top_spacing != false || $kid_toys_store_bottom_spacing != false || $kid_toys_store_left_spacing != false || $kid_toys_store_right_spacing != false){
		$kid_toys_store_custom_css .='#slider .carousel-caption{';
			$kid_toys_store_custom_css .='top: '.esc_attr($kid_toys_store_top_spacing).'%; bottom: '.esc_attr($kid_toys_store_bottom_spacing).'%; left: '.esc_attr($kid_toys_store_left_spacing).'%; right: '.esc_attr($kid_toys_store_right_spacing).'%;';
		$kid_toys_store_custom_css .='}';
	}

	/*------Slider height ---------*/
	$kid_toys_store_slider_height = get_theme_mod('kid_toys_store_slider_height');
	if($kid_toys_store_slider_height != false){
		$kid_toys_store_custom_css .='#slider img  {';
			$kid_toys_store_custom_css .='height: '.esc_attr($kid_toys_store_slider_height).'px;';
		$kid_toys_store_custom_css .='}';
		$kid_toys_store_custom_css .='@media screen and (max-width: 575px){		
			#slider img  {';
			$kid_toys_store_custom_css .='height: auto;';
		$kid_toys_store_custom_css .='} }';
	}

	/*------Shop page pagination ---------*/
	$kid_toys_store_shop_page_pagination = get_theme_mod('kid_toys_store_shop_page_pagination', true);
	if($kid_toys_store_shop_page_pagination == false){
		$kid_toys_store_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$kid_toys_store_custom_css .='display: none;';
		$kid_toys_store_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$kid_toys_store_post_blocks = get_theme_mod('kid_toys_store_post_blocks', 'Within box');
	if($kid_toys_store_post_blocks == 'Without box' ){
		$kid_toys_store_custom_css .='.postbox{';
			$kid_toys_store_custom_css .=' border: none;';
		$kid_toys_store_custom_css .='}';
	}

	/*------ Button Style -------*/
	$kid_toys_store_top_buttom_padding = get_theme_mod('kid_toys_store_top_button_padding');
	$kid_toys_store_left_right_padding = get_theme_mod('kid_toys_store_left_button_padding');
	if($kid_toys_store_top_buttom_padding != false || $kid_toys_store_left_right_padding != false ){
		$kid_toys_store_custom_css .='.blogbutton-mdall, #slider a.read-more, #comments input[type="submit"].submit{';
			$kid_toys_store_custom_css .='padding-top: '.esc_attr($kid_toys_store_top_buttom_padding).'px; padding-bottom: '.esc_attr($kid_toys_store_top_buttom_padding).'px; padding-left: '.esc_attr($kid_toys_store_left_right_padding).'px; padding-right: '.esc_attr($kid_toys_store_left_right_padding).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_button_border_radius = get_theme_mod('kid_toys_store_button_border_radius');
	$kid_toys_store_custom_css .='.blogbutton-mdall, #slider a.read-more, #comments input[type="submit"].submit, .hvr-sweep-to-right:before{';
		$kid_toys_store_custom_css .='border-radius: '.esc_attr($kid_toys_store_button_border_radius).'px;';
	$kid_toys_store_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/
	$kid_toys_store_woocommerce_button_padding_top = get_theme_mod('kid_toys_store_woocommerce_button_padding_top');
	if($kid_toys_store_woocommerce_button_padding_top != false){
		$kid_toys_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$kid_toys_store_custom_css .='padding-top: '.esc_attr($kid_toys_store_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($kid_toys_store_woocommerce_button_padding_top).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_woocommerce_button_padding_right = get_theme_mod('kid_toys_store_woocommerce_button_padding_right');
	if($kid_toys_store_woocommerce_button_padding_right != false){
		$kid_toys_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$kid_toys_store_custom_css .='padding-left: '.esc_attr($kid_toys_store_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($kid_toys_store_woocommerce_button_padding_right).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_woocommerce_button_border_radius = get_theme_mod('kid_toys_store_woocommerce_button_border_radius');
	if($kid_toys_store_woocommerce_button_border_radius != false){
		$kid_toys_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$kid_toys_store_custom_css .='border-radius: '.esc_attr($kid_toys_store_woocommerce_button_border_radius).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_related_product = get_theme_mod('kid_toys_store_related_product',true);

	if($kid_toys_store_related_product == false){
		$kid_toys_store_custom_css .='.related.products{';
			$kid_toys_store_custom_css .='display: none;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_woocommerce_product_border = get_theme_mod('kid_toys_store_woocommerce_product_border',false);

	if($kid_toys_store_woocommerce_product_border == true){
		$kid_toys_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$kid_toys_store_custom_css .='border: 1px solid #dcdcdc;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_woocommerce_product_padding_top = get_theme_mod('kid_toys_store_woocommerce_product_padding_top');
	$kid_toys_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$kid_toys_store_custom_css .='padding-top: '.esc_attr($kid_toys_store_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($kid_toys_store_woocommerce_product_padding_top).'px;';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_woocommerce_product_padding_right = get_theme_mod('kid_toys_store_woocommerce_product_padding_right');
	$kid_toys_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$kid_toys_store_custom_css .='padding-left: '.esc_attr($kid_toys_store_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($kid_toys_store_woocommerce_product_padding_right).'px;';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_woocommerce_product_border_radius = get_theme_mod('kid_toys_store_woocommerce_product_border_radius');
	if($kid_toys_store_woocommerce_product_border_radius != false){
		$kid_toys_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$kid_toys_store_custom_css .='border-radius: '.esc_attr($kid_toys_store_woocommerce_product_border_radius).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_woocommerce_product_box_shadow = get_theme_mod('kid_toys_store_woocommerce_product_box_shadow');
	if($kid_toys_store_woocommerce_product_box_shadow != false){
		$kid_toys_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$kid_toys_store_custom_css .='box-shadow: '.esc_attr($kid_toys_store_woocommerce_product_box_shadow).'px '.esc_attr($kid_toys_store_woocommerce_product_box_shadow).'px '.esc_attr($kid_toys_store_woocommerce_product_box_shadow).'px #aaa;';
		$kid_toys_store_custom_css .='}';
	}

	/*---- Preloader Color ----*/
	$kid_toys_store_preloader_color = get_theme_mod('kid_toys_store_preloader_color');
	$kid_toys_store_preloader_bg_color = get_theme_mod('kid_toys_store_preloader_bg_color');

	if($kid_toys_store_preloader_color != false){
		$kid_toys_store_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$kid_toys_store_custom_css .='background-color: '.esc_attr($kid_toys_store_preloader_color).';';
		$kid_toys_store_custom_css .='}';
	}
	if($kid_toys_store_preloader_bg_color != false){
		$kid_toys_store_custom_css .='.preloader{';
			$kid_toys_store_custom_css .='background-color: '.esc_attr($kid_toys_store_preloader_bg_color).';';
		$kid_toys_store_custom_css .='}';
	}

	/*---- Copyright css ----*/
	$kid_toys_store_copyright_fontsize = get_theme_mod('kid_toys_store_copyright_fontsize',16);
	if($kid_toys_store_copyright_fontsize != false){
		$kid_toys_store_custom_css .='#footer p{';
			$kid_toys_store_custom_css .='font-size: '.esc_attr($kid_toys_store_copyright_fontsize).'px; ';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_copyright_top_bottom_padding = get_theme_mod('kid_toys_store_copyright_top_bottom_padding',15);
	if($kid_toys_store_copyright_top_bottom_padding != false){
		$kid_toys_store_custom_css .='#footer {';
			$kid_toys_store_custom_css .='padding-top:'.esc_attr($kid_toys_store_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($kid_toys_store_copyright_top_bottom_padding).'px; ';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_copyright_alignment = get_theme_mod( 'kid_toys_store_copyright_alignment','Center');
    if($kid_toys_store_copyright_alignment == 'Left'){
		$kid_toys_store_custom_css .='#footer p{';
			$kid_toys_store_custom_css .='text-align:start;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_copyright_alignment == 'Center'){
		$kid_toys_store_custom_css .='#footer p{';
			$kid_toys_store_custom_css .='text-align:center;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_copyright_alignment == 'Right'){
		$kid_toys_store_custom_css .='#footer p{';
			$kid_toys_store_custom_css .='text-align:end;';
		$kid_toys_store_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$kid_toys_store_woocommerce_sale_top_padding = get_theme_mod('kid_toys_store_woocommerce_sale_top_padding');
	$kid_toys_store_woocommerce_sale_left_padding = get_theme_mod('kid_toys_store_woocommerce_sale_left_padding');
	$kid_toys_store_custom_css .=' .woocommerce span.onsale{';
		$kid_toys_store_custom_css .='padding-top: '.esc_attr($kid_toys_store_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($kid_toys_store_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($kid_toys_store_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($kid_toys_store_woocommerce_sale_left_padding).'px;';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_woocommerce_sale_border_radius = get_theme_mod('kid_toys_store_woocommerce_sale_border_radius', 50);
	$kid_toys_store_custom_css .='.woocommerce span.onsale{';
		$kid_toys_store_custom_css .='border-radius: '.esc_attr($kid_toys_store_woocommerce_sale_border_radius).'px;';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_sale_position = get_theme_mod( 'kid_toys_store_sale_position','right');
    if($kid_toys_store_sale_position == 'left'){
		$kid_toys_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$kid_toys_store_custom_css .='left: -10px; right: auto;';
		$kid_toys_store_custom_css .='}';
	}else if($kid_toys_store_sale_position == 'right'){
		$kid_toys_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$kid_toys_store_custom_css .='left: auto; right: 0;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_product_sale_font_size = get_theme_mod('kid_toys_store_product_sale_font_size', 16);
	$kid_toys_store_custom_css .='.woocommerce span.onsale {';
		$kid_toys_store_custom_css .='font-size: '.esc_attr($kid_toys_store_product_sale_font_size).'px;';
	$kid_toys_store_custom_css .='}';

	// footer background css
	$kid_toys_store_footer_background_color = get_theme_mod('kid_toys_store_footer_background_color');
	$kid_toys_store_custom_css .='.footertown{';
		$kid_toys_store_custom_css .='background-color: '.esc_attr($kid_toys_store_footer_background_color).';';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_footer_background_img = get_theme_mod('kid_toys_store_footer_background_img');
	if($kid_toys_store_footer_background_img != false){
		$kid_toys_store_custom_css .='.footertown{';
			$kid_toys_store_custom_css .='background: url('.esc_attr($kid_toys_store_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$kid_toys_store_custom_css .='}';
	}

	/*---- Comment form ----*/
	$kid_toys_store_comment_width = get_theme_mod('kid_toys_store_comment_width', '100');
	$kid_toys_store_custom_css .='#comments textarea{';
		$kid_toys_store_custom_css .=' width:'.esc_attr($kid_toys_store_comment_width).'%;';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_comment_submit_text = get_theme_mod('kid_toys_store_comment_submit_text', 'Post Comment');
	if($kid_toys_store_comment_submit_text == ''){
		$kid_toys_store_custom_css .='#comments p.form-submit {';
			$kid_toys_store_custom_css .='display: none;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_comment_title = get_theme_mod('kid_toys_store_comment_title', 'Leave a Reply');
	if($kid_toys_store_comment_title == ''){
		$kid_toys_store_custom_css .='#comments h2#reply-title {';
			$kid_toys_store_custom_css .='display: none;';
		$kid_toys_store_custom_css .='}';
	}

	// Topbar padding
	$kid_toys_store_topbar_top_bottom = get_theme_mod('kid_toys_store_topbar_top_bottom');
	$kid_toys_store_custom_css .='.topbar{';
		$kid_toys_store_custom_css .=' padding-top:'.esc_attr($kid_toys_store_topbar_top_bottom).'px; padding-bottom:'.esc_attr($kid_toys_store_topbar_top_bottom).'px;';
	$kid_toys_store_custom_css .='}';

	// Sticky Header padding
	$kid_toys_store_sticky_header_padding = get_theme_mod('kid_toys_store_sticky_header_padding');
	$kid_toys_store_custom_css .='.fixed-header{';
		$kid_toys_store_custom_css .=' padding-top:'.esc_attr($kid_toys_store_sticky_header_padding).'px; padding-bottom:'.esc_attr($kid_toys_store_sticky_header_padding).'px;';
	$kid_toys_store_custom_css .='}';

	// Navigation Font Size 
	$kid_toys_store_nav_font_size = get_theme_mod('kid_toys_store_nav_font_size');
	if($kid_toys_store_nav_font_size != false){
		$kid_toys_store_custom_css .='.primary-navigation ul li a{';
			$kid_toys_store_custom_css .='font-size: '.esc_attr($kid_toys_store_nav_font_size).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_navigation_case = get_theme_mod('kid_toys_store_navigation_case', 'capitalize');
	if($kid_toys_store_navigation_case == 'uppercase' ){
		$kid_toys_store_custom_css .='.primary-navigation ul li a{';
			$kid_toys_store_custom_css .=' text-transform: uppercase;';
		$kid_toys_store_custom_css .='}';
	}elseif($kid_toys_store_navigation_case == 'capitalize' ){
		$kid_toys_store_custom_css .='.primary-navigation ul li a{';
			$kid_toys_store_custom_css .=' text-transform: capitalize;';
		$kid_toys_store_custom_css .='}';
	}

	//Site title Font size
	$kid_toys_store_site_title_fontsize = get_theme_mod('kid_toys_store_site_title_fontsize');
	$kid_toys_store_custom_css .='.logo h1, .logo p.site-title{';
		$kid_toys_store_custom_css .='font-size: '.esc_attr($kid_toys_store_site_title_fontsize).'px;';
	$kid_toys_store_custom_css .='}';

	$kid_toys_store_site_description_fontsize = get_theme_mod('kid_toys_store_site_description_fontsize');
	$kid_toys_store_custom_css .='.logo p.site-description{';
		$kid_toys_store_custom_css .='font-size: '.esc_attr($kid_toys_store_site_description_fontsize).'px;';
	$kid_toys_store_custom_css .='}';

	/*----- Featured image css -----*/
	$kid_toys_store_featured_image_border_radius = get_theme_mod('kid_toys_store_featured_image_border_radius');
	if($kid_toys_store_featured_image_border_radius != false){
		$kid_toys_store_custom_css .='.postbox .box-image img, .postbox .box-image{';
			$kid_toys_store_custom_css .='border-radius: '.esc_attr($kid_toys_store_featured_image_border_radius).'px;';
		$kid_toys_store_custom_css .='}';
	}

	$kid_toys_store_featured_image_box_shadow = get_theme_mod('kid_toys_store_featured_image_box_shadow');
	if($kid_toys_store_featured_image_box_shadow != false){
		$kid_toys_store_custom_css .='.postbox .box-image img{';
			$kid_toys_store_custom_css .='box-shadow: 8px 8px '.esc_attr($kid_toys_store_featured_image_box_shadow).'px #aaa;';
		$kid_toys_store_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$kid_toys_store_responsive_topbar_hide = get_theme_mod('kid_toys_store_responsive_topbar_hide',false);
	if($kid_toys_store_responsive_topbar_hide == true && get_theme_mod('kid_toys_store_topbar_hide',false) == false){
		$kid_toys_store_custom_css .='@media screen and (min-width:575px){
			.topbar{';
			$kid_toys_store_custom_css .='display:none;';
		$kid_toys_store_custom_css .='} }';
	}

	if($kid_toys_store_responsive_topbar_hide == false){
		$kid_toys_store_custom_css .='@media screen and (max-width:575px){
			.topbar{';
			$kid_toys_store_custom_css .='display:none;';
		$kid_toys_store_custom_css .='} }';
	}

	$kid_toys_store_responsive_show_back_to_top = get_theme_mod('kid_toys_store_responsive_show_back_to_top',true);
	if($kid_toys_store_responsive_show_back_to_top == true && get_theme_mod('kid_toys_store_show_back_to_top',true) == false){
		$kid_toys_store_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$kid_toys_store_custom_css .='visibility:hidden;';
		$kid_toys_store_custom_css .='} }';
	}

	if($kid_toys_store_responsive_show_back_to_top == false){
		$kid_toys_store_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$kid_toys_store_custom_css .='visibility:hidden;';
		$kid_toys_store_custom_css .='} }';
	}

	$kid_toys_store_responsive_preloader_hide = get_theme_mod('kid_toys_store_responsive_preloader_hide',false);
	if($kid_toys_store_responsive_preloader_hide == true && get_theme_mod('kid_toys_store_preloader_hide',false) == false){
		$kid_toys_store_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$kid_toys_store_custom_css .='display:none !important;';
		$kid_toys_store_custom_css .='} }';
	}

	if($kid_toys_store_responsive_preloader_hide == false){
		$kid_toys_store_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$kid_toys_store_custom_css .='display:none !important;';
		$kid_toys_store_custom_css .='} }';
	}

	$kid_toys_store_slider = get_theme_mod( 'kid_toys_store_mobile_media_slider',false);
	if($kid_toys_store_slider == true && get_theme_mod( 'kid_toys_store_slider_arrows', false) == false){
    	$kid_toys_store_custom_css .='#slider{';
			$kid_toys_store_custom_css .='display:none;';
		$kid_toys_store_custom_css .='} ';
	}
    if($kid_toys_store_slider == true){
    	$kid_toys_store_custom_css .='@media screen and (max-width:575px) {';
		$kid_toys_store_custom_css .='#slider{';
			$kid_toys_store_custom_css .='display:block;';
		$kid_toys_store_custom_css .='} }';
	}else if($kid_toys_store_slider == false){
		$kid_toys_store_custom_css .='@media screen and (max-width:575px) {';
		$kid_toys_store_custom_css .='#slider{';
			$kid_toys_store_custom_css .='display:none;';
		$kid_toys_store_custom_css .='} }';
	}

	//Social icon Font size
	$kid_toys_store_social_icon_fontsize = get_theme_mod('kid_toys_store_social_icon_fontsize');
	$kid_toys_store_custom_css .='.topbar span.social-media i{';
		$kid_toys_store_custom_css .='font-size: '.esc_attr($kid_toys_store_social_icon_fontsize).'px;';
	$kid_toys_store_custom_css .='}';

	/*-------- Copyright background css -------*/
	$kid_toys_store_copyright_background_color = get_theme_mod('kid_toys_store_copyright_background_color');
	$kid_toys_store_custom_css .='#footer{';
		$kid_toys_store_custom_css .='background-color: '.esc_attr($kid_toys_store_copyright_background_color).';';
	$kid_toys_store_custom_css .='}';