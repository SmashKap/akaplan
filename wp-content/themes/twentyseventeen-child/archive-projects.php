<?php
/**
 * The template for displaying portfolio archives
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary-portfolio" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1");
				$size = "full";
				$service_type = get_field("service_type");
				$project_link = get_field("project_link");
			?>

			<article id="portfolio" class="project">
				<div class="project-images">
					<a href="<?php the_permalink(); ?>">
						<?php if ($image_1) {
							// code...
							echo wp_get_attachment_image($image_1, $size);
						} ?>
					</a>
				</div>
				<aside class="project-sidebar">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h4><?php echo $service_type; ?></h4>
					<?php the_excerpt(); ?>
					<div class="take-action-link"><a href="<?php the_permalink(); ?>"><span>View Project</span> »</a>
					</div>
				</aside>
			</article>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
