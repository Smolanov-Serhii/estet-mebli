<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
get_header(); ?>
<div class="main-content-inner">
<?php if (get_option('tmpmela_page_sidebar') == 'yes') : ?>
<section id="primary" class="content-area">
<?php else : ?>
<section id="primary" class="main-content-inner-full">
<?php endif; ?>  
<div class="page-title"><div class="page-title-inner"><h3 class="entry-title-main"><?php
						/*
						 * Queue the first post, that way we know what author
						 * we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop properly
						 * with a call to rewind_posts().
						 */
						the_post();
						printf( esc_html__( 'All posts by %s', 'shopinia' ), get_the_author() );
					?></h3>
	<?php tmpmela_breadcrumbs(); ?></div>
	</div>
<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="author-description">
		        <?php the_author_meta( 'description' ); ?>
			</div>
		<?php endif; ?>
<div id="content" class="site-content" role="main">
	<div class="blog">
    <?php if ( have_posts() ) : ?>
    <?php			/*
					 * Since we called the_post() above, we need to rewind
					 * the loop back to the beginning that way we can run
					 * the loop properly, in full.
					 */
					rewind_posts();
					// Start the Loop.
					while ( have_posts() ) : the_post();
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					endwhile;
					// Previous/next page navigation.
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
				endif;
			?>
  </div>
</div><!-- #content -->
<?php tmpmela_paging_nav();?>
</section><!-- #primary -->
<?php 
if (get_option('tmpmela_page_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
endif;  ?>
</div><!--main-content-inner -->
<?php get_footer(); ?>