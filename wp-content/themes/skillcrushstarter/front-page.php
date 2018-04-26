<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>
<div id="page" class="hfeed site">
	<header class="page-header container">
		<a href="<?php echo site_url(); ?>" class="top-logo">
			<span class="title"><?php bloginfo('name'); ?></span>
			<span class="sub-title"><?php bloginfo('description'); ?></span>
		</a>

		<nav class="top-nav">
			<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
		</nav>
	</header>
</div>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/SmashKap" class="soc-icon tw"></a>
					<a href="https://www.linkedin.com/in/ashley-kaplan-5055a4121/" class="soc-icon ln"></a>
					<a href="https://github.com/SmashKap" class="soc-icon gh"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">Take a look!</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
