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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				$size = "full";
				$image_1 = get_field('image_1');
				$service_type = get_field('service_type');
				$project_link = get_field('project_link');
			?>

			<article class="project">
				<h2><?php the_title(); ?></h2>
				<?php if ($image_1) {
					echo wp_get_attachment_image($image_1, $size);
				} ?>
				<h4><?php echo $service_type; ?></h4>

				<?php the_content(); ?>

				<p class="read-more-link"><a href="<?php echo $link; ?>">View Project &rsaquo;</a>
				</p>

			</article>



			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
