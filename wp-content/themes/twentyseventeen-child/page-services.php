<?php
/**
 * The template for displaying the "services" page
 *
 * This is the template that displays the "services" page by default.
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
	<div id="primary-services" class="content-area">
		<main id="main-services" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();
				$service_1 = get_field('service_1');
				$icon_1 = get_field('icon_1');
				$description_1 = get_field('description_1');
				$service_2 = get_field('service_2');
				$icon_2 = get_field('icon_2');
				$description_2 = get_field('description_2');
				$service_3 = get_field('service_3');
				$icon_3 = get_field('icon_3');
				$description_3 = get_field('description_3');
				$service_4 = get_field('service_4');
				$icon_4 = get_field('icon_4');
				$description_4 = get_field('description_4');
			?>
			<?php get_template_part( 'template-parts/page/content', 'page' ); ?>
			<?php endwhile; // End of the loop.
			?>
			<section class="services">
				<div class="service-list-grid">
					<div class="service-1">
						<h3><?php echo $service_1 ?></h3>
						<p><?php echo $description_1 ?></p>
					</div>
					<div class="icon-1">
						<?php echo wp_get_attachment_image($icon_1) ?>
					</div>
					<div class="service-2">
						<h3><?php echo $service_2 ?></h3>
						<p><?php echo $description_2 ?></p>
					</div>
					<div class="icon-2">
						<?php echo wp_get_attachment_image($icon_2) ?>
					</div>
					<div class="service-3">
						<h3><?php echo $service_3 ?></h3>
						<p><?php echo $description_3 ?></p>
					</div>
					<div class="icon-3">
						<?php echo wp_get_attachment_image($icon_3) ?>
					</div>
					<div class="service-4">
						<h3><?php echo $service_4 ?></h3>
						<p><?php echo $description_4 ?></p>
					</div>
					<div class="icon-4">
						<?php echo wp_get_attachment_image($icon_4) ?>
					</div>

				</div>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
