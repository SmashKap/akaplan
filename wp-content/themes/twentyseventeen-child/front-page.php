<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('front-page'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="about">
			<div class="blue-brick-background">
			</div>
			<div class="homepage intro">
				<h2><a href="<?php echo site_url('/about/') ?>">About</a></h2>
				<?php // Show the selected frontpage content.
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
						endwhile;
				else :
					get_template_part( 'template-parts/post/content', 'none' );
				endif; ?>
			</div>
		</section>

		<section id="recent-posts">
			<div class="blue-brick-background">
			</div>
			<div class="homepage recent-posts-grid">
				<div class="blog-post">
					<h2><a href="<?php echo site_url('/blog/') ?>">Blog Posts</a></h2>
					<?php query_posts('posts_per_page=2') ?>
						<?php while (have_posts() ): the_post(); ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>

				<div class="twitter-feed">
					<h2><a href="https://twitter.com/SmashKap">Recent Tweets</a></h2>
					<h3><a href="https://twitter.com/SmashKap">@SmashKap</a></h3>
					<?php if ( is_active_sidebar( 'twitter-feed-sidebar' ) ) : ?>
						<div id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'twitter-feed-sidebar' ); ?>
						</div>
					<?php endif; ?>
					<div class="take-action-link">
						<a href="https://twitter.com/SmashKap">
							<span>Follow Me</span> »
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="services">
			<div class="blue-brick-background">
			</div>
			<div class="homepage services">
				<?php
					$services_page = 64;
					$service_1 = get_field('service_1', $services_page);
					$icon_1 = get_field('icon_1', $services_page);
					$service_2 = get_field('service_2', $services_page);
					$icon_2 = get_field('icon_2', $services_page);
					$service_3 = get_field('service_3', $services_page);
					$icon_3 = get_field('icon_3', $services_page);
					$service_4 = get_field('service_4', $services_page);
					$icon_4 = get_field('icon_4', $services_page);
				?>
				<h2><a href="<?php echo site_url('/services/') ?>">Services</a></h2>
				<ul class="service-list">
					<a href="<?php echo site_url('/services/') ?>">
						<li>
							<?php echo wp_get_attachment_image($icon_1,$services_page); ?>
								<h3><?php echo $service_1; ?></h3>
						</li>
					</a>
					<a href="<?php echo site_url('/services/') ?>">
						<li>
							<?php echo wp_get_attachment_image($icon_2,$services_page); ?>
							<h3><?php echo $service_2; ?></h3>
						</li>
					</a>
					<a href="<?php echo site_url('/services/') ?>">
						<li>
								<?php echo wp_get_attachment_image($icon_3,$services_page); ?>
								<h3><?php echo $service_3; ?></h3>
						</li>
					</a>
					<a href="<?php echo site_url('/services/') ?>">
						<li>
							<?php echo wp_get_attachment_image($icon_4,$services_page); ?>
						<h3><?php echo $service_4; ?></h3>
						</li>
					</a>
				</ul>
			</div>
		</section>

		<section id="portfolio">
			<div class="blue-brick-background">
			</div>
			<div class="homepage projects">
				<h2><a href="<?php echo site_url('/portfolio/') ?>">Portfolio</a></h2>
				<ul class="featured-projects">
					<?php query_posts('posts_per_page=3&post_type=projects'); ?>
						<?php while (have_posts() ) : the_post();
							$image_1 = get_field("image_1");
							$size = "medium";
						?>
					<li class="individual-project">
						<figure>
							<a href="<?php the_permalink(); ?>">
								<?php echo wp_get_attachment_image($image_1,$size); ?>
							</a>
						</figure>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul>
			</div>
		</section>

		<section id="contact">
			<div class="blue-brick-background">
			</div>
			<div class="homepage contact">
				<h2><a href="<?php echo site_url('/contact/') ?>">Hire Me!</a></h2>
				<div class="contact-form">
					<?php if ( is_active_sidebar( 'contact-form-sidebar' ) ) : ?>
						<div id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'contact-form-sidebar'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
