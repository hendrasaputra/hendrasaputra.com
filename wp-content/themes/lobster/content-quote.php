<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @since 1.0
 */
$cyber_dc_boot_theme_options = cyber_dc_boot_theme_options();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part( 'content', 'header' ); ?>
			    <i class="icon-quote-left"></i>

			    
			    <div class="entry-content quote">
				    <?php the_content( __( 'Read more &#133;', 'cdc_lobster' ) ); ?>
			    </div><!-- .entry-content -->

			    <?php get_template_part( 'content', 'footer' ); ?>
			</div>
	    </div>
	</article>