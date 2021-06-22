<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stock
 */

if(get_post_meta($post->ID, 'stock_page_options', true)){
	$page_meta = get_post_meta($post->ID, 'stock_page_options', true);
}else{
	$page_meta = [];
}

if(array_key_exists('stock_page_title', $page_meta)){
	$enable_title = $page_meta['stock_page_title'];
}else{
	$enable_title = true;
}
if(array_key_exists('stock_page_content', $page_meta)){
	$enable_content = $page_meta['stock_page_content'];
}else{
	$enable_content = false;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if($enable_title == true): ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php endif; ?>
	
	<?php stock_crazycafe_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if($enable_content==true):
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stock-crazycafe' ),
				'after'  => '</div>',
			)
		);
	endif;
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'stock-crazycafe' ),
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
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
