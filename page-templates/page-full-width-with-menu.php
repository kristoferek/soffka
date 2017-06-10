<?php
/*
Template Name: Full width content + menu
*/
get_header(); ?>

<nav id="bread" aria-label="You are here:" role="navigation">
	<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
</nav>
<div class="main-wrap full-width navigation-pink" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<header class="row">
				<div class="small-10 columns">
					<h1 class="entry-title medium-centered navigation-title"><?php the_title(); ?></h1>
				</div>
				<div class="small-2 columns navigation-image">
					<?php
					// If a featured image is set, insert into layout and use Interchange
					// to select the optimal image size per named media query.
					if ( has_post_thumbnail( $post->ID ) ) : ?>
					<img class="alignright" src="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
					<?php endif; ?>
				</div>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
