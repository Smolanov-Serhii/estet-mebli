<?php  /* Template Name: Blog List */  ?>
<?php get_header(); 
$tmpmela_content_position = tmpmela_content_position();
?>
<!-- Start blog-list -->
<div id="main-content" class="main-content blog-page blog-list  <?php echo esc_attr(tmpmela_sidebar_position()); ?>">
<div id="primary" class="content-area">
<div class="page-title"><div class="page-title-inner"><h1 class="entry-title-main"><?php  the_title();?></h1>
	<?php tmpmela_breadcrumbs(); ?></div>
	</div>
	
    <div id="content" class="site-content" role="main">
	<div class="blog">
        <?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }			
			wp_reset_postdata();  // re-sets query
  			$last_class = "";
				$blog_args = array(
					'posts_per_page' 	=> tmpmela_blog_list_posts_per_page(), 
					'paged' 			=> $paged,
					'post_type'			=> 'post',
					'status'			=> 'publish',
				);
				$wp_query = new WP_Query();
    			$wp_query->query( $blog_args );
				if ( $wp_query->have_posts() ): ?>
      	<?php 
			// Start the Loop.
			while ( have_posts() ) : the_post();
				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */ 
				get_template_part( 'content', get_post_format() );
			endwhile;
		else: ?>
        <p>
          <?php  esc_html__( 'Sorry, no posts matched your criteria.', 'shopinia' ); ?>
        </p>
        <?php endif;
				 ?>
             
			</div>
        <?php // Post navigation.
			   tmpmela_paging_nav();
			   wp_reset_postdata();  ?>
            </div><!-- #content -->
      <?php if($tmpmela_content_position == 'below') : 
				// Page thumbnail
				tmpmela_post_thumbnail();
				the_content(); 
			endif; ?>
  </div><!-- #primary -->
<?php 
  get_sidebar();
  ?>
</div>
<!-- End blog-list -->
<?php get_footer(); ?>