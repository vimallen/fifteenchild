<?php
/**
 * * Template Name: page-collection
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
	endwhile;
	?>


		<div class="grid grid-pad" >
		<!-- <h2><?php the_title(); ?></h2> -->
		<?php
		          $loop = new WP_Query(array('post_type' => 'module-collection',
		          'posts_per_page' => 10,
		          'orderby'=>'title',
		           'order'=>'ASC',
		          ));
		     ?>
		     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		     <?php
		          $custom = get_post_custom($post->ID);
		          $screenshot_url = $custom["screenshot_url"][0];
		          $website_url = $custom["website_url"][0];
		     ?>


			<div class="media">
				<h4><?php the_title(); ?></h4>
				<div class="media__body">
			<?php the_post_thumbnail('thumbnail', array('class' => 'media__img')); ?>
		<?php the_content(); ?>
	</div>
	</div><!-- media -->



		<?php endwhile; ?>
		</div><!--grid-->

	</main><!-- .site-main -->



</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
