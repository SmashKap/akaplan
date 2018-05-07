<?php
/**
 * The template for displaying project/portfolio pages
 *
 *  * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary-single-project" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				$size = "full";
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$service_type = get_field('service_type');
				$project_link = get_field('project_link');
			?>

			<article class="project">
				<header class="entry-header">
					<h1><?php the_title(); ?></h1>
				</header>

				<h5><?php echo $service_type; ?></h5>

				<p><?php the_content(); ?></p>

				<?php if ($project_link) { ?>
					<div class="take-action-link">
						<a href="<?php echo $project_link; ?>" target="_blank">View Project Online &rsaquo;&rsaquo;</a>
					</div>
				<?php } ?>

				<div class="single-project-images">
					<div class="project-image-1">
						<?php if ($image_1) {
							echo wp_get_attachment_image($image_1, $size);
						} ?>
					</div>
					<div class="project-image-2">
						<?php if ($image_2) {
							echo wp_get_attachment_image($image_2, $size);
						} ?>
					</div>
					<div class="project-image-3">
						<?php if ($image_3) {
							echo wp_get_attachment_image($image_3, $size);
						} ?>
					</div>
				</div>

			</article>
			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
