<?
/**
 * The footer for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Animal_Clinic
 */

$webfx_copyright_text = get_option('first_button_text');

?>
<!-- Footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6"> 			
				<?
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}?>
			</div>
			<div class="col-lg-3 col-md-6"> 
				<?		
				if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div class="col-lg-3 col-md-6"> 
				<? if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
				}?>
			</div>
			<div class="col-lg-3 col-md-6"> 
				<? if(is_active_sidebar('footer-sidebar-4')){
					dynamic_sidebar('footer-sidebar-4');
				}?>
			</div>	
		</div>	
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="bottom-wrap">
				<?
				wp_nav_menu([
					'menu'            => 'footer',
					'theme_location'  => 'menu-2',
					'depth'           => 3,	
					'container'       => 'div',
					'container_class' => 'footer-left',
					'container_id'    => '',
					'menu_id'         => false,
					'menu_class'      => 'footer-menu',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
					'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="copyright"> '. get_theme_mod( 'copyright_setting').'</div>'
				]);
				
				?>
				
				<div class="back-top">
					<a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
				</div>
			</div>
		</div>
	</div>
</footer>
	<? wp_footer(); ?>
</body>
</html>