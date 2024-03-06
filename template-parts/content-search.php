<?
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Animal_Clinic
 */

?>

<article id="post-<? the_ID(); ?>" <? post_class(); ?>>
	<header class="entry-header">
		<? the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<? if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?
			university_animal_clinic_posted_on();
			university_animal_clinic_posted_by();
			?>
		</div><!-- .entry-meta -->
		<? endif; ?>
	</header><!-- .entry-header -->

	<? university_animal_clinic_post_thumbnail(); ?>

	<div class="entry-summary">
		<? the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<? university_animal_clinic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<? the_ID(); ?> -->
