<?php
/**
 * Product archive page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package furniture
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class="container">
	<?php eshop_breadcrumbs();
		if ( have_posts() ){

			if ( is_home() && ! is_front_page() ){
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			}
		}
	?>

	<div class="row">
		<div class="col-md-9">
		<?php
		if ( have_posts() ) :
			?>
			<div class="posts-list blog-page">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<div class="col-sm-6 col-md-4 posts2-i">
				<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				?>
				</div>
			<?php

			endwhile;
			?>
			</div>
			<?php

			// pagination
			the_posts_pagination( array(
                'mid_size' => 3,
                'prev_text' => '<i class="fa fa-angle-double-left"></i> ',
                'next_text' => ' <i class="fa fa-angle-double-right"></i>',
            ) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
		<div class="col-md-3">
			<?php if ( is_active_sidebar( 'product-sidebar' ) ) { ?>
					<?php dynamic_sidebar( 'product-sidebar' ); ?>
			<?php } ?>
		</div>
	</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
