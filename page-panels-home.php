<?php
/**
 * * Template Name: page-panels-home
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
		          $loop = new WP_Query(array('post_type' => 'panels-home',
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

		<div class="col-1-3">
			<div class="panel-home">
				<h4><?php the_title(); ?></h4>
			<?php the_post_thumbnail(); ?> </a>
		<?php the_content(); ?>
		</div><!-- module -->
		</div><!--col-->


		<?php endwhile; ?>
		</div><!--grid-->

	</main><!-- .site-main -->



</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
