<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acton
 */

?>
<?php if ( is_singular() ) :?>
                        <div id="singular">
<?php endif;?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php acton_post_thumbnail(); ?>
<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

?>
</header><!-- .entry-header -->
<div class="entry-content">
<?php
         the_content(
             sprintf(
                 wp_kses(
                     /* translators: %s: Name of current post. Only visible to screen readers */
                     __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'acton' ),
                     array(
                         'span' => array(
                             'class' => array(),
                             ),
                         )
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'acton' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
<?php
                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
<?php
                             acton_posted_on();
?>
</div><!-- .entry-meta -->
<?php endif; ?>
<!--<?php acton_entry_footer(); ?>-->
</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php if ( is_singular() ) :?>
</div> <!-- singular -->
<?php endif;?>