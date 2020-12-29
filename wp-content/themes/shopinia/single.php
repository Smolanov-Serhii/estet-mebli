<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
get_header(); 
if (get_option('tmpmela_page_sidebar') == 'yes') : ?>
<div id="primary" class="content-area">
<?php else : ?>
<div id="primary" class="main-content-inner-full">
<?php endif; ?>
<div class="page-title">
	<?php tmpmela_breadcrumbs(); ?>
</div>
  <div id="content" class="site-content" role="main">
    <?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
			$tmpmela_is_author_info = tmpmela_is_author_info();
			if($tmpmela_is_author_info == 1):
				get_template_part( 'author-bio' );
			endif;
		// Previous/next post navigation.
		tmpmela_post_nav();
		tmpmela_related_posts();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
	endwhile;
		$tmpmela_is_related_posts = tmpmela_is_related_posts();	
	?>
</div><!-- #content -->
</div><!-- #primary -->
<?php
if (get_option('tmpmela_page_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
endif;  ?>
<?php get_footer(); ?>