<?php
/**
 * Template Name: Sites
 *
 * Description: Use this page template for a sites page with a right sidebar.
 */
get_header(); ?>

<div class="page-right-sidebar">

	<div id="primary" class="site-content">
	
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
    <?php 
		if ( is_active_sidebar( 'sidebar-sites' ) ) :
			?>
			<div id="secondary" class="widget-area" role="complementary">
				<aside id="sidebar-sites" role="complementary">
					<?php dynamic_sidebar( 'sidebar-sites' ); ?>
				</aside>
			</div>
			<?php
		endif;
	?>
</div>
<?php get_footer(); ?>
