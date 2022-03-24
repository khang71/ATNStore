<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-aa">
 *
 * @package Kid Toys Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  <?php if(get_theme_mod('kid_toys_store_preloader_hide',false)!= '' || get_theme_mod('kid_toys_store_responsive_preloader_hide',false) != ''){ ?>
    <?php if(get_theme_mod( 'kid_toys_store_preloader_type','center-square') == 'center-square'){ ?>
      <div class='preloader'>
        <div class='preloader-squares'>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
        </div>
    </div>
    <?php }else if(get_theme_mod( 'kid_toys_store_preloader_type') == 'chasing-square') {?>
      <div class='preloader'>
        <div class='preloader-chasing-squares'>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'kid-toys-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'kid-toys-store' );?></span></a>
    <?php if( get_theme_mod('kid_toys_store_topbar_hide') != '' || get_theme_mod('kid_toys_store_responsive_topbar_hide',false) != ''){ ?>
      <div class="topbar">
          <div class="container">
            <div class="baricon p-2">
              <?php if( get_theme_mod( 'kid_toys_store_mail','' ) != '') { ?>
                <a href="mailto:<?php echo esc_attr( get_theme_mod('kid_toys_store_mail','')); ?>"><span class="email pe-lg-2 pe-md-1 mb-lg-0 mb-2"><?php if (get_theme_mod('kid_toys_store_email_icon') != 'None'){ ?><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_email_icon','fas fa-envelope')); ?> me-1 ms-2" aria-hidden="true"></i><?php }?><?php echo esc_html( get_theme_mod('kid_toys_store_mail','') ); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Email','kid-toys-store' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'kid_toys_store_call','' ) != '') { ?>
                <a href="tel:<?php echo esc_attr( get_theme_mod('kid_toys_store_call','')); ?>"><span class="call pe-lg-2 pe-md-1 mb-lg-0 mb-2"><?php if (get_theme_mod('kid_toys_store_phone_icon') != 'None'){ ?><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_phone_icon','fas fa-phone')); ?> me-1 ms-2" aria-hidden="true"></i><?php }?><?php echo esc_html( get_theme_mod('kid_toys_store_call','')); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Phone Number','kid-toys-store' );?></span></a>
              <?php } ?>
              <span class="social-media">
                <?php if( get_theme_mod( 'kid_toys_store_youtube_url') != '' && get_theme_mod('kid_toys_store_youtube_icon') != 'None') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_youtube_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_youtube_icon','fab fa-youtube')); ?> "></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'kid-toys-store' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'kid_toys_store_facebook_url') != '' && get_theme_mod('kid_toys_store_facebook_icon') != 'None') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_facebook_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_facebook_icon','fab fa-facebook-f')); ?> ms-md-1 ms-lg-2 ms-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'kid-toys-store' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'kid_toys_store_twitter_url') != '' && get_theme_mod('kid_toys_store_twitter_icon') != 'None') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_twitter_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_twitter_icon','fab fa-twitter')); ?> ms-md-1 ms-lg-2 ms-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'kid-toys-store' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'kid_toys_store_rss_url') != '' && get_theme_mod('kid_toys_store_rss_icon') != 'None') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_rss_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_rss_icon','fas fa-rss')); ?> ms-md-1 ms-lg-2 ms-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'RSS', 'kid-toys-store' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'kid_toys_store_linkedin_url') != '' && get_theme_mod('kid_toys_store_linkedin_icon') != 'None') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_linkedin_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_linkedin_icon','fab fa-linkedin-in')); ?> ms-md-1 ms-lg-2 ms-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'kid-toys-store' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'kid_toys_store_instagram_url') != '' && get_theme_mod('kid_toys_store_insta_icon') != 'None') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_instagram_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_insta_icon','fab fa-instagram')); ?> ms-md-1 ms-lg-2 ms-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'kid-toys-store' );?></span></a>
                <?php } ?>
              </span>
            </div>
          </div>
      </div>
    <?php }?>
    <div id="header" class="<?php if( get_theme_mod( 'kid_toys_store_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div class="container">
        <div class="row">
          <div class="logo col-lg-3 col-md-5 col-9 align-self-center">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php if( get_theme_mod( 'kid_toys_store_site_title',true) != '') { ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php endif; ?>
            <?php }?>
            <?php if( get_theme_mod( 'kid_toys_store_site_tagline',true) != '') { ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
              ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>
            <?php }?>
          </div>
          <div class="col-lg-7 col-md-3 col-3 align-self-center">
            <div class="menubox nav align-self-center">
              <?php if(has_nav_menu('primary')){ ?>
                <div class="toggle-menu responsive-menu">
                  <button role="tab" onclick="kid_toys_store_menu_open()"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_responsive_open_menu_icon','fas fa-bars')); ?> py-1 px-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','kid-toys-store'); ?></span></button>
                </div>
                <div id="menu-sidebar" class="nav side-menu">
                  <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'kid-toys-store' ); ?>">
                    <?php 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    ?>
                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="kid_toys_store_menu_close()"><i class="<?php echo esc_html(get_theme_mod('kid_toys_store_responsive_close_menu_icon','fas fa-times'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','kid-toys-store'); ?></span></a>
                  </nav>
                </div>
              <?php }?>
            </div>
            <div class="clear"></div>
          </div>
          <div class=" col-lg-2 col-md-4 headericons mt-md-0 mt-2 align-self-center">
            <div class="row">
              <div class="search-box col-lg-4 col-md-4 col-4 p-0 my-3 align-self-center" >
                <button type="button" onclick="kid_toys_store_search_show()"><img  role="img" src="<?php echo esc_url(get_template_directory_uri().'/images/searchicon.png'); ?>" alt="<?php esc_attr_e('Search Image','kid-toys-store'); ?>"></button>
              </div>
              <div class="search-outer">
                <div class="serach_inner">
                  <?php get_search_form(); ?>
                </div>
                <button type="button" class="closepop"  onclick="kid_toys_store_search_hide()">X</span></button>
              </div>
              <div class="col-lg-4 col-md-4 col-4 p-0">
                <span class="cart_icon">
                  <?php if(class_exists('woocommerce')){ ?>
                    <li class="cart_box">
                      <span class="cart-value px-2"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()) );?></span>
                    </li> 
                  <?php } ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>"><img role="img" src="<?php echo esc_url(get_template_directory_uri().'/images/icon.png'); ?>" alt="<?php esc_attr_e('Cart Image','kid-toys-store'); ?>"><span class="screen-reader-text"><?php esc_html_e('Cart Image','kid-toys-store'); ?></span></a>
                </span>
              </div>
              <div class="col-lg-4 col-md-4 col-4 p-0 align-self-center">
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><img role="img" src="<?php echo esc_url(get_template_directory_uri().'/images/accounticon.png'); ?>" alt="<?php esc_attr_e('MyAccount Image','kid-toys-store'); ?>" class="account-img my-2"><span class="screen-reader-text"><?php esc_html_e('MyAccount Image','kid-toys-store'); ?></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>