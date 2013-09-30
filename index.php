<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">
	
	<section id="content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<p class="post-dates"><?php ?></p><?php the_date('F, j, Y', '<h3>', '</h3>', true);?>

			<?php the_post_thumbnail('medium'); ?>
			
			<?php the_content( __( 'Read more', 'blm_basic' ) ); ?>

			<?php
				$meta_quote = get_post_meta( $post->ID, "quotation", true );
				if ($meta_quote) {
					echo "<p>Quote: <strong>".$meta_quote."</strong></p>";
				} else {
					echo "<p>No quote found.</p>";
				}
				?>
				
			<?php get_template_part( 'inc/meta', 'new' ); ?>

		</article>
		
	<?php endwhile; endif; ?>
	
	<?php get_template_part( 'inc/nav' ); ?>
	
	</section><!-- #content -->

<?php get_sidebar(); ?>

</div><!-- #main -->

<?php get_footer(); ?>