<?
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Animal_Clinic
 */
 
$webfx_first_button_text = get_option('first_button_text');
$webfx_first_button_link = get_option('first_button_link');
$webfx_second_button_text = get_option('second_button_text');
$webfx_second_button_link = get_option('second_button_link');
$webfx_top_banner_text = get_option('top_banner_text');
$webfx_top_banner_button_text = get_option('top_banner_button_text');
$webfx_top_banner_button_link = get_option('top_banner_button_link');

?>
<!DOCTYPE html>
<html <? language_attributes(); ?>>

<head>
	<meta charset="<? bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- SEO Metatag -->
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<link rel="shortcut icon" href="<? echo get_site_icon_url();?>">
	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? bloginfo( 'name' ); ?></title>
	<? wp_head(); ?>
</head>

<body <? body_class(); ?>>
<? wp_body_open(); ?>
<!-- Header Start -->
	<? if( $webfx_top_banner_text && $webfx_top_banner_button_text && $webfx_top_banner_button_link != "" ){ ?>
	<div class="covid-message">
	<div class="container">
		<div class="covid-text"><? echo $webfx_top_banner_text; ?></div>
		<div class="covid-link">
		<a class="learn-more" href="<? echo $webfx_top_banner_button_link; ?>"><? echo $webfx_top_banner_button_text; ?><span class="icon-arrow-right"></span></a>
		</div>
		<a href="javascript:void(0);" class="icon-close removeit"></a>
	</div>
	</div>
	<?
	}						
	else{
		echo '';
	} 
	?>
	<header class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
					<a href="#">
						  <? the_custom_logo(); ?>
					</a>
				</div>
				<div class="header-right">
					<div class="header-content">
						<? if( get_theme_mod( 'phone_setting') != "" ) { ?>
							<div class="call-us"><span>call us today</span> 
							<a href="tel:<? echo get_theme_mod( 'phone_setting'); ?>"><? echo get_theme_mod( 'phone_setting'); ?></a></div>
						<?
						}						
						else{
							echo '';
						} ?>
						<div class="online-request">
						<? if( $webfx_first_button_text && $webfx_first_button_link != "" ) { ?>
							<a href="<? echo $webfx_first_button_link; ?>" class="btn btn-secondary"><? echo $webfx_first_button_text; ?></a>
						<?
						}						
						else{
							echo '';
						} 
						if( $webfx_second_button_text && $webfx_second_button_link != "" ) { ?>
							<a href="<? echo $webfx_second_button_link; ?>" class="btn btn-primary"><? echo $webfx_second_button_text; ?></a>
						<?
						}						
						else{
							echo '';
						} ?>
						</div>
					</div>
					<!-- Navigation Start -->
					<div class="header-bottom">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="menu-text">Menu</span>
							</button>
							<?
							wp_nav_menu([
								'menu'            => 'primary',
								'theme_location'  => 'menu-1',
								'depth'           => 3,	
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarSupportedContent',
								'menu_id'         => false,
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    							'walker'          => new WP_Bootstrap_Navwalker(),
							]);
							?>
						</nav>
						<!-- Navigation End -->
						<div class="header-search">
							<a href="javascript:void(0);" class="icon-search"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="searchbar">
			<div class="container">
				<div class="searchbar-inner">
					<input type="text" class="form-control" placeholder="Search here..." />
					<button type="submit" class="btn search-btn icon-search"></button>
				</div>
			</div>
		</div>

		<div class="mobile-bottom-header">
				<? if( get_theme_mod( 'phone_setting') != "" ) { ?>
					<div class="call-us"><span>call us today</span> 
					<a href="tel:<? echo get_theme_mod( 'phone_setting'); ?>"><? echo get_theme_mod( 'phone_setting'); ?></a></div>
				<?
				}						
				else{
					echo '';
				} ?>
		</div>
	</header>
<!-- Header End -->