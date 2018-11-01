<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package furniture
 */

get_header();
?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'furniture' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'furniture' ); ?></p>

					<?php
					get_search_form();
					?>

					<div class="container">
						<div class="row not_found">
							<div class="col-md-4">
								<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
							</div>
							<div class="col-md-4">
								<div class="widget widget_categories">
									<h2 class="widgettitle"><?php esc_html_e( 'Most Used Categories', 'furniture' ); ?></h2>
									<ul>
										<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										?>
									</ul>
								</div><!-- .widget -->
							</div>
							<div class="col-md-4">
								<?php
								/* translators: %1$s: smiley */
								$furniture_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'furniture' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$furniture_archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
								?>
							</div>
						</div>
					</div>





				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
