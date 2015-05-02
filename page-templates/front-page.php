<?php
/**
 * Template Name: Front Page
 *
 * @package Forefront
 */

get_header(); ?>

	<div id="primary" class="content-area front-page-content-area full-width">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="hero <?php echo forefront_additional_class(); ?>">
				<?php if ( '' != get_the_post_thumbnail() ) : ?>
				<figure>
					<?php the_post_thumbnail( 'forefront-page-thumbnail' ); ?>
					<div>
						<div>
							<div>
								<h1 class="page-title"><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</figure>
				<?php endif; ?>
				<div>
					<div>
						<div>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<h1 class="page-title sanukot"><?php the_title(); ?></h1>
								</header>
								<!--<div class="slogan">-->
								<!--<div class="title-bar-green"><span class="leerzeichen sanukot">Titel Green</span></div>-->
								<!--<div class="title-bar-magenta"><span class="leerzeichen sanukot">Titel Magenta</span></div></div>-->
								<div class="entry-content">
									<?php the_content(); ?>
								</div>
								<?php edit_post_link( __( 'Edit', 'forefront' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
							</article>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_sidebar( 'front-page-one' ); ?>

	<?php get_sidebar( 'front-page-two' ); ?>

	<?php $testimonials = forefront_get_random_posts( 2, 'jetpack-testimonial' ); ?>

	<?php if ( ! empty( $testimonials ) ) : ?>
	<div class="clear testimonials">
		<?php
			foreach ( $testimonials as $testimonial ) : setup_postdata( $GLOBALS['post'] =& $testimonial );
				 get_template_part( 'content', 'testimonial' );
			endforeach;
			wp_reset_postdata();
		?>
	</div>
	<?php endif; ?>

<?php get_footer(); ?>