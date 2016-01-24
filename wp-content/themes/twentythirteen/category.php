<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			
			<!--timeline include 	-->
			<!--<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->-->
			<!--<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->-->
			<!--<script src="js/modernizr.js"></script> <!-- Modernizr -->-->
		  		
			</header><!-- .archive-header -->



			<section id="cd-timeline" class="cd-container">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content-timeline', get_post_format() ); ?>
				<?php // get_template_part( 'content', get_post_format() ); ?>
				
			<?php endwhile; ?>
			</section> <!-- cd-timeline -->
			<!--timeline include-->
			<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
			<!--<script src="js/main.js"></script> <!-- Resource jQuery -->-->
			
			

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
