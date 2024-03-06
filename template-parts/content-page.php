<?
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Animal_Clinic
 */

?>

<article id="post-<? the_ID(); ?>" <? post_class(); ?>>
	<header class="entry-header">
		<? the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<? university_animal_clinic_post_thumbnail(); ?>

	<div class="entry-content">
		<?
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'university-animal-clinic' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<? if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'university-animal-clinic' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<? endif; ?>
</article><!-- #post-<? the_ID(); ?> -->
